<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @php wp_head() @endphp

  <!-- Custom Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto+Slab:wght@400;500&display=swap" rel="stylesheet">
  <link href="//db.onlinewebfonts.com/c/7545727b8655ab061706c0ce6e537ea5?family=AndreaIIScriptUpright" rel="stylesheet" type="text/css" />
</head>
<?php
use function App\config;
?>
<style>
  @font-face {
    font-family: "GillSans_Regular";
    src: url("<?php echo config('theme.uri') . '/resources/assets/fonts/GillSans_Regular.otf'; ?>");
  }
  
  @font-face {
    font-family: "GillSans_Medium";
    src: url("<?php echo config('theme.uri') . '/resources/assets/fonts/GillSans_Medium.otf'; ?>");
  }
</style>