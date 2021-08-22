<?php include('assets/libs/header.php'); ?>
<?php
if (strlen($_SESSION['id']==0)) {
  header('location:assets/libs/deconnexion.php');
  } else{ 

    if(isset($_POST['about_section']))
    {
      $about_text_section=$_POST['about_text_section'];
      $about_description_section=$_POST['about_description_section'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE home set about_text_section='$about_text_section', about_description_section='$about_description_section' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['slider_home_section']))
    {
      $title_slider_home=$_POST['title_slider_home'];
      $description_slider_home=$_POST['description_slider_home'];
      $btn_show_slider_home=$_POST['btn_show_slider_home'];
      $btn_url_slider_home=$_POST['btn_url_slider_home'];
      $btn_text_slider_home=$_POST['btn_text_slider_home'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE home set title_slider_home='$title_slider_home', description_slider_home='$description_slider_home'
      , btn_show_slider_home='$btn_show_slider_home', btn_url_slider_home='$btn_url_slider_home', btn_text_slider_home='$btn_text_slider_home' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['about_box1_section']))
    {
      $about_box1_url_section=$_POST['about_box1_url_section'];
      $about_box1_url_new_tab_section=$_POST['about_box1_url_new_tab_section'];
      $about_box1_icon_section=$_POST['about_box1_icon_section'];
      $about_box1_text_section=$_POST['about_box1_text_section'];
      $about_box1_description_section=$_POST['about_box1_description_section'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE home set about_box1_url_section='$about_box1_url_section'
      , about_box1_url_new_tab_section='$about_box1_url_new_tab_section', about_box1_icon_section='$about_box1_icon_section', about_box1_text_section='$about_box1_text_section', about_box1_description_section='$about_box1_description_section' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['about_box2_section']))
    {
      $about_box2_url_section=$_POST['about_box2_url_section'];
      $about_box2_url_new_tab_section=$_POST['about_box2_url_new_tab_section'];
      $about_box2_icon_section=$_POST['about_box2_icon_section'];
      $about_box2_text_section=$_POST['about_box2_text_section'];
      $about_box2_description_section=$_POST['about_box2_description_section'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE home set about_box2_url_section='$about_box2_url_section', about_box2_url_new_tab_section='$about_box2_url_new_tab_section', about_box2_icon_section='$about_box2_icon_section', 
      about_box2_text_section='$about_box2_text_section', about_box2_description_section='$about_box2_description_section' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['about_box3_section']))
    {
      $about_box3_url_section=$_POST['about_box3_url_section'];
      $about_box3_url_new_tab_section=$_POST['about_box3_url_new_tab_section'];
      $about_box3_icon_section=$_POST['about_box3_icon_section'];
      $about_box3_text_section=$_POST['about_box3_text_section'];
      $about_box3_description_section=$_POST['about_box3_description_section'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE home set about_box3_url_section='$about_box3_url_section', about_box3_url_new_tab_section='$about_box3_url_new_tab_section', about_box3_icon_section='$about_box3_icon_section', 
      about_box3_text_section='$about_box3_text_section', about_box3_description_section='$about_box3_description_section' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['video_section']))
    {
      $video_text_section=$_POST['video_text_section'];
      $video_show_section=$_POST['video_show_section'];
      $video_id_section=$_POST['video_id_section'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE home set video_text_section='$video_text_section', video_show_section='$video_show_section', video_id_section='$video_id_section' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['gallery_section']))
    {
      $gallery_show_section=$_POST['gallery_show_section'];
      $gallery_text_section=$_POST['gallery_text_section'];
      $gallery_more_section=$_POST['gallery_more_section'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE home set gallery_show_section='$gallery_show_section', gallery_text_section='$gallery_text_section', gallery_more_section='$gallery_more_section' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['timeline_section']))
    {
      $timeline_show_section=$_POST['timeline_show_section'];
      $timeline_text_section=$_POST['timeline_text_section'];
      $timeline_description_section=$_POST['timeline_description_section'];
      $timeline_more_section=$_POST['timeline_more_section'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE home set timeline_show_section='$timeline_show_section', timeline_text_section='$timeline_text_section', timeline_description_section='$timeline_description_section',
       timeline_more_section='$timeline_more_section' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['staff_section']))
    {
      $staff_show_section=$_POST['staff_show_section'];
      $staff_text_section=$_POST['staff_text_section'];
      $staff_more_section=$_POST['staff_more_section'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE home set staff_show_section='$staff_show_section', staff_text_section='$staff_text_section', staff_more_section='$staff_more_section' where id='$id'");
    $_SESSION['msg']="Updated";
    }
    
    if(isset($_POST['about2_box1_section']))
    {
      $about2_box1_url_section=$_POST['about2_box1_url_section'];
      $about2_box1_url_new_tab_section=$_POST['about2_box1_url_new_tab_section'];
      $about2_box1_icon_section=$_POST['about2_box1_icon_section'];
      $about2_box1_text_section=$_POST['about2_box1_text_section'];
      $about2_box1_description_section=$_POST['about2_box1_description_section'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE home set about2_box1_url_section='$about2_box1_url_section'
      , about2_box1_url_new_tab_section='$about2_box1_url_new_tab_section', about2_box1_icon_section='$about2_box1_icon_section', about2_box1_text_section='$about2_box1_text_section', about2_box1_description_section='$about2_box1_description_section' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['about2_box2_section']))
    {
      $about2_box2_url_section=$_POST['about2_box2_url_section'];
      $about2_box2_url_new_tab_section=$_POST['about2_box2_url_new_tab_section'];
      $about2_box2_icon_section=$_POST['about2_box2_icon_section'];
      $about2_box2_text_section=$_POST['about2_box2_text_section'];
      $about2_box2_description_section=$_POST['about2_box2_description_section'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE home set about2_box2_url_section='$about2_box2_url_section', about2_box2_url_new_tab_section='$about2_box2_url_new_tab_section', about2_box2_icon_section='$about2_box2_icon_section', 
      about2_box2_text_section='$about2_box2_text_section', about2_box2_description_section='$about2_box2_description_section' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['about2_box3_section']))
    {
      $about2_box3_url_section=$_POST['about2_box3_url_section'];
      $about2_box3_url_new_tab_section=$_POST['about2_box3_url_new_tab_section'];
      $about2_box3_icon_section=$_POST['about2_box3_icon_section'];
      $about2_box3_text_section=$_POST['about2_box3_text_section'];
      $about2_box3_description_section=$_POST['about2_box3_description_section'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE home set about2_box3_url_section='$about2_box3_url_section', about2_box3_url_new_tab_section='$about2_box3_url_new_tab_section', about2_box3_icon_section='$about2_box3_icon_section', 
      about2_box3_text_section='$about2_box3_text_section', about2_box3_description_section='$about2_box3_description_section' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['faq_section']))
    {
      $faq_text_section=$_POST['faq_text_section'];
      $faq_description_section=$_POST['faq_description_section'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE home set faq_text_section='$faq_text_section', faq_description_section='$faq_description_section' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['donate_vote_section']))
    {
      $donate_text_section=$_POST['donate_text_section'];
      $vote_text_section=$_POST['vote_text_section'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE home set donate_text_section='$donate_text_section', vote_text_section='$vote_text_section' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['devlog_news_section']))
    {
      $devlog_text_section=$_POST['devlog_text_section'];
      $news_text_section=$_POST['news_text_section'];
      $blog_text_section=$_POST['blog_text_section'];
      $shop_text_section=$_POST['shop_text_section'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE home set devlog_text_section='$devlog_text_section', news_text_section='$news_text_section', blog_text_section='$blog_text_section', shop_text_section='$shop_text_section' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['buy_section']))
    {
      $buy_text=$_POST['buy_text'];
      $buy_text_name=$_POST['buy_text_name'];
      $buy_text_email=$_POST['buy_text_email'];
      $buy_text_discord=$_POST['buy_text_discord'];
      $buy_text_send_amount=$_POST['buy_text_send_amount'];
      $buy_text_btn_buy=$_POST['buy_text_btn_buy'];
      $buy_text_confirm=$_POST['buy_text_confirm'];
      $buy_send_confirm=$_POST['buy_send_confirm'];
      $success_text=$_POST['success_text'];
      $success_description=$_POST['success_description'];
      $success_discord_text=$_POST['success_discord_text'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE home set buy_text='$buy_text', buy_text_name='$buy_text_name'
      , buy_text_email='$buy_text_email', buy_text_discord='$buy_text_discord', buy_text_send_amount='$buy_text_send_amount', buy_text_btn_buy='$buy_text_btn_buy'
      , buy_text_confirm='$buy_text_confirm', buy_send_confirm='$buy_send_confirm', success_text='$success_text', success_description='$success_description', success_discord_text='$success_discord_text' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['register_section']))
    {
      $register_text_section=$_POST['register_text_section'];
      $username_register_text_section=$_POST['username_register_text_section'];
      $password_register_text_section=$_POST['password_register_text_section'];
      $btn_register_button_section=$_POST['btn_register_button_section'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE home set register_text_section='$register_text_section', username_register_text_section='$username_register_text_section', password_register_text_section='$password_register_text_section', btn_register_button_section='$btn_register_button_section' where id='$id'");
    $_SESSION['msg']="Updated";
    }
    
?>
<?php $reponse = $bdd->query("SELECT * from home WHERE id='".$_GET['id']."'"); while ($data = $reponse->fetch()) { ?>
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                             Others Setting
                        </h1>
                      <p align="center" style="color:black; font-size: 20px"><b><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']=""; ?></b></p>
		</div>
       <div id="page-inner"> 
			 <div class="row">
			 <div class="col-lg-12">

    <div class="card">
       <div class="card-content">
    <form class="col s12" method="post" action="">
      <div class="row">
      <div class="input-field col s6">
        <h5>Title slider home</h5>
        <input type="text" name="title_slider_home" class="validate" value="<?php echo $data['title_slider_home']; ?>">
      </div>
      <div class="input-field col s6">
        <h5>Description slider home</h5>
        <input type="text" name="description_slider_home" class="validate" value="<?php echo $data['description_slider_home']; ?>">
      </div>
      <div class="input-field col s6">
        <h5>Show button slider home</h5>
      <input name="btn_show_slider_home" type="radio" id="btn_show_slider_home_no" value="none">
      <label for="btn_show_slider_home_no">No</label>
      <input name="btn_show_slider_home" type="radio" id="btn_show_slider_home_yes" value="">
      <label for="btn_show_slider_home_yes">Yes</label>
      </div>
      <div class="input-field col s6">
        <h5>Button url slider home</h5>
        <input type="text" name="btn_url_slider_home" class="validate" value="<?php echo $data['btn_url_slider_home']; ?>">
      </div>
      <div class="input-field col s6">
        <h5>Button text slider home</h5>
        <input type="text" name="btn_text_slider_home" class="validate" value="<?php echo $data['btn_text_slider_home']; ?>">
      </div>
      </div>
        <center><button type="submit" name="slider_home_section" class="btn btn-primary">Update</button></center>
    </form>
	<div class="clearBoth"></div>
  </div>
  </div>
    
    <div class="card">
    <div class="card-content">
 <form class="col s12" method="post" action="">
   <div class="row">
   <div class="input-field col s6">
     <h5>About text section home</h5>
     <input type="text" name="about_text_section" class="validate" value="<?php echo $data['about_text_section']; ?>">
   </div>
   <div class="input-field col s6">
     <h5>About description section home</h5>
     <input type="text" name="about_description_section" class="validate" value="<?php echo $data['about_description_section']; ?>">
   </div>

   </div>
     <center><button type="submit" name="about_section" class="btn btn-primary">Update</button></center>
 </form>
<div class="clearBoth"></div>
</div>
</div>
    
    <div class="card">
         <div class="card-content">
      <form class="col s12" method="post" action="">
        <div class="row">
        <div class="input-field col s6">
          <h5>About box1 text section home</h5>
          <input type="text" name="about_box1_text_section" class="validate" value="<?php echo $data['about_box1_text_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>About box1 url section home</h5>
          <input type="text" name="about_box1_url_section" class="validate" value="<?php echo $data['about_box1_url_section']; ?>">
        </div>
        <div class="input-field col s12">
          <h5>About box1 url new tab section home</h5>
        <input name="about_box1_url_new_tab_section" type="radio" id="about_box1_url_new_tab_section_no" value="">
        <label for="about_box1_url_new_tab_section_no">No</label>
        <input name="about_box1_url_new_tab_section" type="radio" id="about_box1_url_new_tab_section_yes" value="_blank">
        <label for="about_box1_url_new_tab_section_yes">Yes</label>
        </div>
        <div class="input-field col s6">
          <h5>about box1 text section home</h5>
          <input type="text" name="about_box1_icon_section" class="validate" value="<?php echo $data['about_box1_icon_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>About box1 description section home</h5>
          <input type="text" name="about_box1_description_section" class="validate" value="<?php echo $data['about_box1_description_section']; ?>">
        </div>
        </div>
          <center><button type="submit" name="about_box1_section" class="btn btn-primary">Update</button></center>
      </form>
    <div class="clearBoth"></div>
    </div>
    </div>
    
    <div class="card">
         <div class="card-content">
      <form class="col s12" method="post" action="">
        <div class="row">
        <div class="input-field col s6">
          <h5>About box2 text section home</h5>
          <input type="text" name="about_box2_text_section" class="validate" value="<?php echo $data['about_box2_text_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>About box2 url section home</h5>
          <input type="text" name="about_box2_url_section" class="validate" value="<?php echo $data['about_box2_url_section']; ?>">
        </div>
        <div class="input-field col s12">
          <h5>About box2 url new tab section home</h5>
        <input name="about_box2_url_new_tab_section" type="radio" id="about_box2_url_new_tab_section_no" value="">
        <label for="about_box2_url_new_tab_section_no">No</label>
        <input name="about_box2_url_new_tab_section" type="radio" id="about_box2_url_new_tab_section_yes" value="_blank">
        <label for="about_box2_url_new_tab_section_yes">Yes</label>
        </div>
        <div class="input-field col s6">
          <h5>about box2 text section home</h5>
          <input type="text" name="about_box2_icon_section" class="validate" value="<?php echo $data['about_box2_icon_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>About box2 description section home</h5>
          <input type="text" name="about_box2_description_section" class="validate" value="<?php echo $data['about_box2_description_section']; ?>">
        </div>
        </div>
          <center><button type="submit" name="about_box2_section" class="btn btn-primary">Update</button></center>
      </form>
    <div class="clearBoth"></div>
    </div>
    </div>
    
    <div class="card">
         <div class="card-content">
      <form class="col s12" method="post" action="">
        <div class="row">
        <div class="input-field col s6">
          <h5>About box3 text section home</h5>
          <input type="text" name="about_box3_text_section" class="validate" value="<?php echo $data['about_box3_text_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>About box3 url section home</h5>
          <input type="text" name="about_box3_url_section" class="validate" value="<?php echo $data['about_box3_url_section']; ?>">
        </div>
        <div class="input-field col s12">
          <h5>About box3 url new tab section home</h5>
        <input name="about_box3_url_new_tab_section" type="radio" id="about_box3_url_new_tab_section_no" value="">
        <label for="about_box3_url_new_tab_section_no">No</label>
        <input name="about_box3_url_new_tab_section" type="radio" id="about_box3_url_new_tab_section_yes" value="_blank">
        <label for="about_box3_url_new_tab_section_yes">Yes</label>
        </div>
        <div class="input-field col s6">
          <h5>about box3 text section home</h5>
          <input type="text" name="about_box3_icon_section" class="validate" value="<?php echo $data['about_box3_icon_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>About box3 description section home</h5>
          <input type="text" name="about_box3_description_section" class="validate" value="<?php echo $data['about_box3_description_section']; ?>">
        </div>
        </div>
          <center><button type="submit" name="about_box3_section" class="btn btn-primary">Update</button></center>
      </form>
    <div class="clearBoth"></div>
    </div>
    </div>
    
    <div class="card">
         <div class="card-content">
      <form class="col s12" method="post" action="">
        <div class="row">
        <div class="input-field col s6">
          <h5>Video text section home</h5>
          <input type="text" name="video_text_section" class="validate" value="<?php echo $data['video_text_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Video id section home</h5>
          <input type="text" name="video_id_section" class="validate" value="<?php echo $data['video_id_section']; ?>">
        </div>
        <div class="input-field col s12">
          <h5>Video show section home</h5>
        <input name="video_show_section" type="radio" id="video_show_section_no" value="none">
        <label for="video_show_section_no">No</label>
        <input name="video_show_section" type="radio" id="video_show_section_yes" value="">
        <label for="video_show_section_yes">Yes</label>
        </div>
        </div>
          <center><button type="submit" name="video_section" class="btn btn-primary">Update</button></center>
      </form>
    <div class="clearBoth"></div>
    </div>
    </div>
    
    <div class="card">
         <div class="card-content">
      <form class="col s12" method="post" action="">
        <div class="row">
        <div class="input-field col s6">
          <h5>Gallery text section home</h5>
          <input type="text" name="gallery_text_section" class="validate" value="<?php echo $data['gallery_text_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Gallery more section home</h5>
          <input type="text" name="gallery_more_section" class="validate" value="<?php echo $data['gallery_more_section']; ?>">
        </div>
        <div class="input-field col s12">
          <h5>Gallery show section home</h5>
        <input name="gallery_show_section" type="radio" id="gallery_show_section_no" value="none">
        <label for="gallery_show_section_no">No</label>
        <input name="gallery_show_section" type="radio" id="gallery_show_section_yes" value="">
        <label for="gallery_show_section_yes">Yes</label>
        </div>
        </div>
          <center><button type="submit" name="gallery_section" class="btn btn-primary">Update</button></center>
      </form>
    <div class="clearBoth"></div>
    </div>
    </div>
    
    <div class="card">
         <div class="card-content">
      <form class="col s12" method="post" action="">
        <div class="row">
        <div class="input-field col s6">
          <h5>Timeline text section home</h5>
          <input type="text" name="timeline_text_section" class="validate" value="<?php echo $data['timeline_text_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Timeline description section home</h5>
          <input type="text" name="timeline_description_section" class="validate" value="<?php echo $data['timeline_description_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Timeline more section home</h5>
          <input type="text" name="timeline_more_section" class="validate" value="<?php echo $data['timeline_more_section']; ?>">
        </div>
        <div class="input-field col s12">
          <h5>Timeline show section home</h5>
        <input name="timeline_show_section" type="radio" id="timeline_show_section_no" value="none">
        <label for="timeline_show_section_no">No</label>
        <input name="timeline_show_section" type="radio" id="timeline_show_section_yes" value="">
        <label for="timeline_show_section_yes">Yes</label>
        </div>
        </div>
          <center><button type="submit" name="timeline_section" class="btn btn-primary">Update</button></center>
      </form>
    <div class="clearBoth"></div>
    </div>
    </div>
    
    <div class="card">
         <div class="card-content">
      <form class="col s12" method="post" action="">
        <div class="row">
        <div class="input-field col s6">
          <h5>Staff text section home</h5>
          <input type="text" name="staff_text_section" class="validate" value="<?php echo $data['staff_text_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Staff more section home</h5>
          <input type="text" name="staff_more_section" class="validate" value="<?php echo $data['staff_more_section']; ?>">
        </div>
        <div class="input-field col s12">
          <h5>Timeline show section home</h5>
        <input name="staff_show_section" type="radio" id="staff_show_section_no" value="none">
        <label for="staff_show_section_no">No</label>
        <input name="staff_show_section" type="radio" id="staff_show_section_yes" value="">
        <label for="staff_show_section_yes">Yes</label>
        </div>
        </div>
          <center><button type="submit" name="staff_section" class="btn btn-primary">Update</button></center>
      </form>
    <div class="clearBoth"></div>
    </div>
    </div>
    
    <div class="card">
         <div class="card-content">
      <form class="col s12" method="post" action="">
        <div class="row">
        <div class="input-field col s6">
          <h5>about2 box1 text section home</h5>
          <input type="text" name="about2_box1_text_section" class="validate" value="<?php echo $data['about2_box1_text_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>about2 box1 url section home</h5>
          <input type="text" name="about2_box1_url_section" class="validate" value="<?php echo $data['about2_box1_url_section']; ?>">
        </div>
        <div class="input-field col s12">
          <h5>about2 box1 url new tab section home</h5>
        <input name="about2_box1_url_new_tab_section" type="radio" id="about2_box1_url_new_tab_section_no" value="">
        <label for="about2_box1_url_new_tab_section_no">No</label>
        <input name="about2_box1_url_new_tab_section" type="radio" id="about2_box1_url_new_tab_section_yes" value="_blank">
        <label for="about2_box1_url_new_tab_section_yes">Yes</label>
        </div>
        <div class="input-field col s6">
          <h5>about2 box1 text section home</h5>
          <input type="text" name="about2_box1_icon_section" class="validate" value="<?php echo $data['about2_box1_icon_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>about2 box1 description section home</h5>
          <input type="text" name="about2_box1_description_section" class="validate" value="<?php echo $data['about2_box1_description_section']; ?>">
        </div>
        </div>
          <center><button type="submit" name="about2_box1_section" class="btn btn-primary">Update</button></center>
      </form>
    <div class="clearBoth"></div>
    </div>
    </div>
    
    <div class="card">
         <div class="card-content">
      <form class="col s12" method="post" action="">
        <div class="row">
        <div class="input-field col s6">
          <h5>about2 box2 text section home</h5>
          <input type="text" name="about2_box2_text_section" class="validate" value="<?php echo $data['about2_box2_text_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>about2 box2 url section home</h5>
          <input type="text" name="about2_box2_url_section" class="validate" value="<?php echo $data['about2_box2_url_section']; ?>">
        </div>
        <div class="input-field col s12">
          <h5>about2 box2 url new tab section home</h5>
        <input name="about2_box2_url_new_tab_section" type="radio" id="about2_box2_url_new_tab_section_no" value="">
        <label for="about2_box2_url_new_tab_section_no">No</label>
        <input name="about2_box2_url_new_tab_section" type="radio" id="about2_box2_url_new_tab_section_yes" value="_blank">
        <label for="about2_box2_url_new_tab_section_yes">Yes</label>
        </div>
        <div class="input-field col s6">
          <h5>about2 box2 text section home</h5>
          <input type="text" name="about2_box2_icon_section" class="validate" value="<?php echo $data['about2_box2_icon_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>about2 box2 description section home</h5>
          <input type="text" name="about2_box2_description_section" class="validate" value="<?php echo $data['about2_box2_description_section']; ?>">
        </div>
        </div>
          <center><button type="submit" name="about2_box2_section" class="btn btn-primary">Update</button></center>
      </form>
    <div class="clearBoth"></div>
    </div>
    </div>
    
    <div class="card">
         <div class="card-content">
      <form class="col s12" method="post" action="">
        <div class="row">
        <div class="input-field col s6">
          <h5>about2 box3 text section home</h5>
          <input type="text" name="about2_box3_text_section" class="validate" value="<?php echo $data['about2_box3_text_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>about2 box3 url section home</h5>
          <input type="text" name="about2_box3_url_section" class="validate" value="<?php echo $data['about2_box3_url_section']; ?>">
        </div>
        <div class="input-field col s12">
          <h5>about2 box3 url new tab section home</h5>
        <input name="about2_box3_url_new_tab_section" type="radio" id="about2_box3_url_new_tab_section_no" value="">
        <label for="about2_box3_url_new_tab_section_no">No</label>
        <input name="about2_box3_url_new_tab_section" type="radio" id="about2_box3_url_new_tab_section_yes" value="_blank">
        <label for="about2_box3_url_new_tab_section_yes">Yes</label>
        </div>
        <div class="input-field col s6">
          <h5>about2 box3 text section home</h5>
          <input type="text" name="about2_box3_icon_section" class="validate" value="<?php echo $data['about2_box3_icon_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>about2 box3 description section home</h5>
          <input type="text" name="about2_box3_description_section" class="validate" value="<?php echo $data['about2_box3_description_section']; ?>">
        </div>
        </div>
          <center><button type="submit" name="about2_box3_section" class="btn btn-primary">Update</button></center>
      </form>
    <div class="clearBoth"></div>
    </div>
    </div>
    
    <div class="card">
    <div class="card-content">
 <form class="col s12" method="post" action="">
   <div class="row">
   <div class="input-field col s6">
     <h5>FAQ text section</h5>
     <input type="text" name="faq_text_section" class="validate" value="<?php echo $data['faq_text_section']; ?>">
   </div>
   <div class="input-field col s6">
     <h5>FAQ description section</h5>
     <input type="text" name="faq_description_section" class="validate" value="<?php echo $data['faq_description_section']; ?>">
   </div>

   </div>
     <center><button type="submit" name="faq_section" class="btn btn-primary">Update</button></center>
 </form>
<div class="clearBoth"></div>
</div>
</div>
    
    <div class="card">
        <div class="card-content">
     <form class="col s12" method="post" action="">
       <div class="row">
       <div class="input-field col s6">
         <h5>Donate text section</h5>
         <input type="text" name="donate_text_section" class="validate" value="<?php echo $data['donate_text_section']; ?>">
       </div>
       <div class="input-field col s6">
         <h5>Vote text section</h5>
         <input type="text" name="vote_text_section" class="validate" value="<?php echo $data['vote_text_section']; ?>">
       </div>
    
       </div>
         <center><button type="submit" name="donate_vote_section" class="btn btn-primary">Update</button></center>
     </form>
    <div class="clearBoth"></div>
    </div>
    </div>
    
    <div class="card">
         <div class="card-content">
      <form class="col s12" method="post" action="">
        <div class="row">
        <div class="input-field col s6">
          <h5>Devlog text section</h5>
          <input type="text" name="devlog_text_section" class="validate" value="<?php echo $data['devlog_text_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>News text section</h5>
          <input type="text" name="news_text_section" class="validate" value="<?php echo $data['news_text_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Blog text section</h5>
          <input type="text" name="blog_text_section" class="validate" value="<?php echo $data['blog_text_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Shop text section</h5>
          <input type="text" name="shop_text_section" class="validate" value="<?php echo $data['shop_text_section']; ?>">
        </div>
        </div>
          <center><button type="submit" name="devlog_news_section" class="btn btn-primary">Update</button></center>
      </form>
    <div class="clearBoth"></div>
    </div>
    </div>
    
    <div class="card">
         <div class="card-content">
      <form class="col s12" method="post" action="">
        <div class="row">
        <div class="input-field col s6">
          <h5>Buy text</h5>
          <input type="text" name="buy_text" class="validate" value="<?php echo $data['buy_text']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Buy text name</h5>
          <input type="text" name="buy_text_name" class="validate" value="<?php echo $data['buy_text_name']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Buy text email</h5>
          <input type="text" name="buy_text_email" class="validate" value="<?php echo $data['buy_text_email']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Buy text discord</h5>
          <input type="text" name="buy_text_discord" class="validate" value="<?php echo $data['buy_text_discord']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Buy text send amount</h5>
          <input type="text" name="buy_text_send_amount" class="validate" value="<?php echo $data['buy_text_send_amount']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Buy text button buy</h5>
          <input type="text" name="buy_text_btn_buy" class="validate" value="<?php echo $data['buy_text_btn_buy']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Buy text confirm</h5>
          <input type="text" name="buy_text_confirm" class="validate" value="<?php echo $data['buy_text_confirm']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Buy send confirm</h5>
          <input type="text" name="buy_send_confirm" class="validate" value="<?php echo $data['buy_send_confirm']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Success text</h5>
          <input type="text" name="success_text" class="validate" value="<?php echo $data['success_text']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Success description</h5>
          <input type="text" name="success_description" class="validate" value="<?php echo $data['success_description']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Success discord text</h5>
          <input type="text" name="success_discord_text" class="validate" value="<?php echo $data['success_discord_text']; ?>">
        </div>
        </div>
          <center><button type="submit" name="buy_section" class="btn btn-primary">Update</button></center>
      </form>
    <div class="clearBoth"></div>
    </div>
    </div>
    
    <div class="card">
         <div class="card-content">
      <form class="col s12" method="post" action="">
        <div class="row">
        <div class="input-field col s6">
          <h5>Register text section</h5>
          <input type="text" name="register_text_section" class="validate" value="<?php echo $data['register_text_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Username register text section</h5>
          <input type="text" name="username_register_text_section" class="validate" value="<?php echo $data['username_register_text_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Password register text section</h5>
          <input type="text" name="password_register_text_section" class="validate" value="<?php echo $data['password_register_text_section']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Register button section</h5>
          <input type="text" name="btn_register_button_section" class="validate" value="<?php echo $data['btn_register_button_section']; ?>">
        </div>
        </div>
          <center><button type="submit" name="register_section" class="btn btn-primary">Update</button></center>
      </form>
    <div class="clearBoth"></div>
    </div>
    </div>






























 </div>	
</div>		

        
                                </div>
                               
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
                <!-- /.col-lg-12 --> 
			</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
	
	<!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/materialize/js/materialize.min.js"></script>
	
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script> 
 

</body>

</html>
<?php } } ?>