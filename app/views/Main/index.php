<h1>Hello World!</h1>
<p><?=$name;?></p>
<p><?=$age;?></p>
<p><?php debug($names);?></p>
<?php foreach ($posts as $post) :?>
    <p><?=$post->title;?></p>
<?php endforeach;?>