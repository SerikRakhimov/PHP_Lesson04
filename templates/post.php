<div style="border: 1px solid #767676">
    <?php
    echo tag('h3',
        ['style'=>'margin:0'],
        $title ?? '[no title]');
    echo tag('p',
        ['style'=>'margin:0'],
        $content ?? '[no title]');
    ?>

</div>