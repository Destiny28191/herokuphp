<!DOCTYPE html>
<html lang="en">
<head>
    <!-- fix: [user-scalable="no"] is used in the <meta name="viewport"> 
         element or the [maximum-scale] attribute is less than 5 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Put your description here.">">
    <title>Document</title>
</head>
<body>
    <!-- fix: Buttons do not have an accessible name -->
    <button> Click Here! </button>
    <!-- fix: Links do not have a discernible name -->
    <a href="https://example.com"> Example Link </a>
    <!-- fix: [id] attributes on active, focusable elements are not unique -->
    <input type = "text" id = "ipHomeSearch" placeholder = "Type your keyword here">
    <input type = "text" id = "ipHomeSearch2" placeholder = "Type your keyword here">
    <!-- fix: Lists do not contain only <li> elements and script supporting elements (<script> and <template>). -->
    <ul>
        <li>
            <p>List item 1</p>
        </li>
    </ul>
    <!-- fix: List items (<li>) are not contained within <ul> or <ol> parent elements. -->
    <ul>
        <li> Another List item 1 <li>
    </ul>
    <!-- fix: Displays images with incorrect aspect ratio -->
    <img src="images/exampleimg.jpg" alt="exampleimg" style="width: 300px; height: 200px">
    <!-- fix: Serves images with low resolution -->
    <img src="flower-large.jpg" alt="flowerlarge" srcset="flower-small.jpg 480w, flower-large.jpg 1080w" sizes="50vw">
    <!-- fix: Links do not have descriptive text -->
    <p>Check out all of our <a href="videos.html">basketball videos</a>.</p>
    <!-- fix: Document does not have a valid rel=canonical -->
    <link rel="canonical" href="https://example.com"/>
</body>
</html>