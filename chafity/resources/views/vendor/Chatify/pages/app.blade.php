@include('Chatify::layouts.headLinks')
<div class="messenger">
    
    <div class="messenger-listView">
        
        <div class="m-header">
            <nav>
                <a href="#"><i class="fas fa-inbox"></i> <span class="messenger-headTitle">Сообщения</span> </a>
                
                <nav class="m-header-right">
                    <a href="#"><i class="fas fa-cog settings-btn"></i></a>
                    <a href="#" class="listView-x"><i class="fas fa-times"></i></a>
                </nav>
            </nav>
           
            <input type="text" class="messenger-search" placeholder="Поиск" />
            
            <div class="messenger-listView-tabs">
                <a href="#" @if($type == 'user') class="active-tab" @endif data-view="users">
                    <span class="far fa-user"></span> Люди</a>
                
            </div>
        </div>

        <div class="m-body contacts-container">
          
           <div class="@if($type == 'user') show @endif messenger-tab users-tab app-scroll" data-view="users">

               <div class="favorites-section">
                <p class="messenger-title">Избранное</p>
                <div class="messenger-favorites app-scroll-thin"></div>
               </div>

   
               {!! view('Chatify::layouts.listItem', ['get' => 'saved']) !!}

                 <div class="listOfContacts" style="width: 100%;height: calc(100% - 200px);position: relative;"></div>

           </div>

           
           <div class="@if($type == 'group') show @endif messenger-tab groups-tab app-scroll" data-view="groups">
        
                <p style="text-align: center;color:grey;margin-top:30px">
                    <a target="_blank" style="color:{{$messengerColor}};" href="https://chatify.munafio.com/notes#groups-feature">Нажми сюда</a> чтобы увидеть больше!
                </p>
             </div>

            
           <div class="messenger-tab search-tab app-scroll" data-view="search">
              
                <p class="messenger-title">Поиск</p>
                <div class="search-records">
                    <p class="message-hint center-el"><span>Нажмите для поиска..</span></p>
                </div>
             </div>
        </div>
    </div>

   
    <div class="messenger-messagingView">
       
        <div class="m-header m-header-messaging">
            <nav class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
               
                <div class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                    <a href="#" class="show-listView"><i class="fas fa-arrow-left"></i></a>
                    <div class="avatar av-s header-avatar" style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                    </div>
                    <a href="#" class="user-name">{{ config('chatify.name') }}</a>
                </div>
               
                <nav class="m-header-right">
                    <a href="#" class="add-to-favorite"><i class="fas fa-star"></i></a>
                    <a href="/"><i class="fas fa-home"></i></a>
                    <a href="#" class="show-infoSide"><i class="fas fa-info-circle"></i></a>
                </nav>
            </nav>
        </div>
       
        <div class="internet-connection">
            <span class="ic-connected">Соединено</span>
            <span class="ic-connecting">Соединение...</span>
            <span class="ic-noInternet">Нет интернета</span>
        </div>

        <div class="m-body messages-container app-scroll">
            <div class="messages">
                <p class="message-hint center-el"><span>Выберите чат и общайтесь</span></p>
            </div>
           
            <div class="typing-indicator">
                <div class="message-card typing">
                    <p>
                        <span class="typing-dots">
                            <span class="dot dot-1"></span>
                            <span class="dot dot-2"></span>
                            <span class="dot dot-3"></span>
                        </span>
                    </p>
                </div>
            </div>
           
            @include('Chatify::layouts.sendForm')
        </div>
    </div>
    
    <div class="messenger-infoView app-scroll">
       
        <nav>
            <a href="#"><i class="fas fa-times"></i></a>
        </nav>
        {!! view('Chatify::layouts.info')->render() !!}
    </div>
</div>

@include('Chatify::layouts.modals')
@include('Chatify::layouts.footerLinks')
