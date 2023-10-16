<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        tailwind.config = {
            theme : {
                extend: {
                    colors: {
                        kuning: {
                            100: '#fff9e6',
                            200: '#fdecae',
                            300: '#fcdd75',
                            400: '#fbce3c',
                            500: '#fabf03',
                            600: '#c19403',
                            700: '#896902',
                            800: '#513e01',
                            900: '#191300',
                        },
                        merah: {
                            100: '#ffe6e9',
                            200: '#feb9c4',
                            300: '#fe8c9e',
                            400: '#fe5f78',
                            500: '#fe3252',
                            600: '#c42740',
                            700: '#8b1a2c',
                            800: '#520d18',
                            900: '#190004',
                        },
                        biru: {
                            100: '#ebfaf8',
                            200: '#cbf2ef',
                            300: '#ace9e4',
                            400: '#8de0d9',
                            500: '#6ed7ce',
                            600: '#53a7a0',
                            700: '#397671',
                            800: '#1f4542',
                            900: '#051413',
                        },
                        putih: '#f5f5fa',
                        hitam: '#101014'
                    }
                }
            }
        }
    </script>
</head>
<body class="font-plusjakarta h-screen bg-putih text-hitam">
    @yield('content')
</body>
</html>