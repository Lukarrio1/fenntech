<!DOCTYPE html>
<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div id="app">
    <v-app>
      <v-content>
          @include('inc.vuenav')
        <v-container>@yield('content')</v-container>
      </v-content>
    </v-app>
  </div>
 
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>
  <script>
    new Vue({ el: '#app' })
  </script>
</body>
</html>