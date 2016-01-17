<html>
<head>
  <title>Jyrone Parker - {{ $post->title }}</title>
  <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "VideoObject",
  "name": "{{$post->title}}",
  "thumbnailUrl": "http://i1-news.softpedia-static.com/images/news2/Keep-Your-Programming-Code-Safe-Obfuscate-It-480832-2.jpg",
  "description": "{{$post->description}}",
  "uploadDate": "{{$post->published_at}}",
  "contentUrl": "{{url('/posts/'.$post->slug)}}",
  "embedUrl": "{{asset('vids/'.$post->content)}}"
}
</script>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage":{
    "@type":"WebPage",
    "@id":"{{url('/posts/'.$post->slug)}}"
  },
  "headline": "{{$post->title}}",
  "image": {
    "@type": "ImageObject",
    "url": "https://en.gravatar.com/userimage/70717632/53adbdecac04d4ffbe3449993c901a73.jpg",
    "height": 800,
    "width": 800
  },
  "datePublished": "{{$post->published_at}}",
  "dateModified": "{{$post->updated_at}}",
  "author": {
    "@type": "Person",
    "name": "Jyrone Parker"
  },
   "publisher": {
    "@type": "Person",
    "name": "Jyrone Parker",
    "url" : "http://www.jyroneparker.com",
    "sameAs" : [
      "https://www.facebook.com/jyrone.parker.1",
      "https://instagram.com/mastashake08",
      "https://www.twitter.com/mastashake08",
      "https://www.linkedin.com/in/jyroneparker",
      "https://plus.google.com/u/0/+JyroneParker/posts"
    ]
  },
  "description": "{{$post->description}}"
}
</script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
        rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1>{{ $post->title }}</h1>
    <h5>{{ $post->published_at->format('M jS Y g:ia') }}</h5>
    <hr>
    <video controls width="100%" src="{{asset('vids/'.$post->content)}}"></video>
    <hr>
    <h2>What's This Video About?</h2>
    <p>{{$post->description}}</p>
    <button class="btn btn-primary" onclick="history.go(-1)">
      « Back
    </button>
  </div>
</body>
</html>
