<head>
    <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
</head>

<body>
    <video id="my-video" class="video-js" controls preload="auto" width="640" height="264" loop data-setup="{}">
        <source src="{{asset('/assets/videos/nature.webm') }}" type="video/webm" />
    </video>

    <script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
</body>