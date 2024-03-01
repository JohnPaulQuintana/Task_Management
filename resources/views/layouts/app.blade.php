<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    {{-- font awesome --}}
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
        href="/css/app-wa-462d1fe84b879d730fe2180b0e0354e0.css?vsn=d">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pdf.css') }}">
</head>

<body class="text-gray-800 font-inter">
    {{-- <div class="min-h-screen">
            @include('layouts.navigation')
            @include('layouts.sidebar')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            
        </div> --}}

    <!-- Page Content -->
    
    @if (!Auth::user()->role)
        
        @include('layouts.sidebar')
    @else
        @include('layouts.admin-sidebar')
    @endif

    <main>
        <input type="number" class="input-role hidden" value="{{ Auth::user()->role }}">
        {{ $slot }}
    </main>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
    <script src="{{ asset('js/index.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @yield('scripts')

    <script>
       
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
       


       
        function getNotification() {
            // Make the AJAX request with CSRF token in headers
            // Get the CSRF token from the hidden input field
            
            $.ajax({
                type: "GET",
                url: "/notification",
                headers: {
                    "X-CSRF-TOKEN": csrfToken
                },
                success: function(response) {
                    // console.log(response)
                    // Handle the AJAX response here
                    var renderNotif = ''
                    var client = 0
                    var message = ["has completed the document number:", "has creating a new task document number:"]
                    // Using a conditional statement
                    if (response.notifs.length > 0) {
                        var role = $('.input-role').val()
                        
                        // alert(role)
                        response.notifs.forEach(notif => {
                            
                            if(role != notif.checkrole){
                                client += 1;
                                $('#count').text(client)
                                $('#countB').text(client)
                                renderNotif += `
                                
                                <li class="shadow-md">
                                    <a href="#" data-id="${notif.id}" class="read py-2 px-4 flex items-center hover:bg-gray-50 group">
                                        <i class="fa-duotone fa-user-tie fa-2xl rounded block object-cover align-middle"></i>
                                        <div class="ml-2">
                                            <div
                                                class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">
                                                    ${notif.name}
                                                </div>
                                            <div class="text-[11px] text-gray-400">${message[notif.checkrole]}</div>
                                            <div class="text-[11px] text-green-500">${notif.document_number}</div>
                                        </div>
                                    </a>
                                </li>
                                `
                            }else{

                            }
                        });

                        $('.notif-container').html(renderNotif)
                        // $('.noti-dot').css({
                        //     'display': 'flex'
                        // })

                        // $('.notification-item').on("click", function() {
                        //     updateNotif($(this).data('id'));
                        // })

                    } else {

                        $('.noti-dot').css({
                            'display': 'none'
                        })
                    }
                },
                error: function(error) {
                    // Handle AJAX error here
                    console.error(error);
                }
            });
        }

        $(document).on('click', '.read', function(){
            // alert($(this).data('id'))
            update($(this).data('id'))
        })

        // update
        function update($id) {
            $.ajax({
                type: "POST",
                url: "/notification-update/" + $id,
                headers: {
                    "X-CSRF-TOKEN": csrfToken
                },
                success: function(response) {
                   
                    if(response.reload){
                        window.location.reload()
                    }


                },
                error: function(error) {
                    // Handle AJAX error here
                    console.error(error);
                }
            });
        }

        function pusherFunction() {
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = false;
            var pusher = new Pusher('e818c4841d4962772cf4', {
                cluster: 'ap1'
            });
            var channel = pusher.subscribe('notify-admin');
            channel.bind('initialize-notif', function(data) {
                // means new patients is registered
                console.log(data.notif.status)
                // notif: 
                // from_id
                // : 
                // 1
                // role
                // : 
                // 0
                // status
                // : 
                // "completed"
                
                    getNotification();
                


            });



        }



        pusherFunction()
        getNotification();
        
    </script>
</body>

</html>
