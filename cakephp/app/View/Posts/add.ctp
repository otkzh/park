<div class="container">
<div class="main_contents">
<center>
<div class="main_title center-block">
    <?php echo $park_list["ParkList"]["park_name"]; ?><br>
</div>
 (<?php echo $park_list["ParkList"]["park_name_rm"]; ?>)
</center>
<table class="menu">
    <tr>
        <td class="post"><a href="/details/items/<?php echo $park_list_id; ?>">基本情報</td>
        <td class="post"><a href="/posts/view/<?php echo $park_list_id; ?>"> みんなの報告</a></td>
        <td class="map">いったよを報告する</a></td>
    </tr>
</table>
<br>
<br>
    <div class="posts form">
    <?php echo $this->Form->create('Post', array(
        'inputDefaults' => array(
            'label' => false,
            'div' => false
        )
    )); ?>
        <fieldset>
        <?php
            $opt_age = array(
                "0歳児", 
                "1歳児", 
                "2歳児", 
                "3歳児", 
                "4歳児", 
                "5歳児", 
                "6歳児");
            $opt_rank = array(
                "1" => str_repeat("☆",1), 
                "2" => str_repeat("☆",2), 
                "3" => str_repeat("☆",3), 
                "4" => str_repeat("☆",4), 
                "5" => str_repeat("☆",5), 
                "0" => "評価しない",
            );          
            echo $this->Form->hidden('park_list_id', array('value' => $park_list_id));
        ?>
        <div class="form-group row">
            <label for="PostAge" class="control-label col-xs-5">お子さんの年齢は？（必須）</label>
            <div class="col-xs-5">
                <?php
                    foreach ($opt_age as $k => $v){
                        $val = pow(2, $k);
                        printf("<label><input type='checkbox' name='data[Post][ages][]' value='%d'>%s</label>", $val, $v);
                    }
                ?>
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="PostRank" class="control-label col-xs-5">この公園の評価は？（必須）</label>
            <div class="col-xs-5">
                <label><input type="radio" name="data[Post][rank]" value="1">いいね</label>    
                <label><input type="radio" name="data[Post][rank]" value="-1">うーん</label>    
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="PostPhotoPath" class="control-label col-xs-5">写真をアップしますか？（自由）</label>
            <div class="col-xs-5">
                <?php //echo $this->Form->file('photo_path', array('class' => 'form-control')); ?>
            <h6>※この写真は公園検索サービス及びSNSに公開されます。
            お子様及び周辺の方々のプライバシーにご配慮ください。</h6>
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="PostMessage" class="control-label col-xs-5">口コミを書く（自由）</label>
            <div class="col-xs-5">
                <?php echo $this->Form->input('message',array('class' => 'form-control')); ?>
            </div>
        </div>
        <br>
        <div class="form-group row">
            <div class="col-xs-offset-5 col-xs-5">
              <input type="submit" class="btn btn-primary" value="<?php echo __("行ったよを投稿する。"); ?>">
            </div>
        </div>
        </fieldset>
    <?php echo $this->Form->end(); ?>
    </div>
</div>
</div>
