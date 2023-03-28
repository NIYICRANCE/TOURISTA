<div class="menu-area">
    <div class="container">
        <div class="main-menu">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <!--=== Onclick Drop-down Menu ===-->
                    <div class="dropdown show onclick-ctg" style="background-color:#00000 !important;">
                      <a class="ctg-btn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
                        Story Category <span id="m-list"><i class="fas fa-list"></i></span>
                      </a>

                      <div class="dropdown-menu">
                        <ul>
                        <?php foreach($category as $ctg): ?>
                            
                        <?php print '<li><a href="'.base_url('users/all-stories').'/?ctg='.$ctg->tag.'">'.$ctg->category.'</a></li>';?>
                       
                        <?php endforeach; ?>
                        </ul>
                      </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="menu">
                        <ul id="nav">
                            <li><a href="<?= base_url()?>home">Home</a></li> 
                            <li><a href="<?= base_url()?>users/all-stories">View Stories</a></li>
                           
                                <?php if($this->session->userdata('logged_in') == FALSE): ?>
                        
                        <li style="margin-left:70px"><a href="<?= base_url()?>users/login" class="btn-login"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                        <li style="margin-left:70px"><a href="<?= base_url()?>users/registration" class="btn-login"><i class="fas fa-user-cog"></i> Register</a></li>

                    <?php else: ?>
                       
                      <li style="margin-left:70px"><div class="admin-search">
                        <?= form_open('users/search', ['id'=>'user-search'])?>
                            <input type="text" name="search_stories" class="form-control" placeholder="Search any story">
                            <button type="submit"><i class="fas fa-search"></i></button>
                      <?= form_close()?>
                      </div></li>
                       
                        
                    <?php endif; ?>


                        <!-- #For admin button  -->
                        <?php if($this->session->userdata('type') == 'A'): ?>
                            <li class="btn-user"><a href="<?= base_url()?>admin"><i class="fas fa-tools"></i> Admin panel</a></li>
                        <?php endif; ?>
                        
                        <!-- #For user account button  -->
                        <?php $type = $this->session->userdata('type') ?>
                            <?php if($type == 'U'): ?>
                            <li class="btn-user"><a href="<?= base_url()?>user-home"><i class="far fa-user"></i> My account</a></li>
                        <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
