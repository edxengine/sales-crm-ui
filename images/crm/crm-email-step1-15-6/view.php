<?php defined('BASEPATH') OR exit('No direct script access allowed');

	$this->load->view('frontend/home/header'); 

	$this->load->view('frontend/common/headersearch'); 
	
	$this->load->view('frontend/home/slider_section'); 
	$this->load->view('frontend/home/company_section'); 
	$this->load->view('frontend/home/placement_section'); 
	$this->load->view('frontend/home/toppicks_section'); 
	$this->load->view('frontend/home/projects_section'); 
	$this->load->view('frontend/home/whyskilllync_section'); 
	$this->load->view('frontend/home/testimonial_section'); 
	$this->load->view('frontend/home/blogs_section'); 
	$this->load->view('frontend/home/news_section'); 

?>
	<!-- Browse Button
    <div class="btn-group browse-btn">
        <label class="btn btn-primary rightdown-btn" id="browse-arrow">   </label>
        <label class="btn btn-primary btn-browsepop" id="buttonclick" href="#browse-pop" data-toggle="modal">
			Browse
		</label>
    </div>  -->
	
	<div class="modal fade desktop-model" id="browse-pop" tabindex="-1" aria-labelledby="browsepopLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header common-header">
                    <a href="" data-dismiss="modal" aria-label="Close" class="arrow-left"> <img src="<?php echo base_url(); ?>images/right-arrow.png" alt=""></a>
                    <h5 class="modal-title" id="browsepopLabel">BROWSE</h5>

                    <a href="" class="btn-cls-desk" data-dismiss="modal" aria-label="Close"><img src="<?php echo base_url(); ?>images/error.png" alt=""></a>
                </div>
                <div class="modal-body">
					<ul class="course-ul pop-link">
                        <li><a href="#placement_company"><span>01</span> Placement Companys</a></li>
                        <li><a href="#recent_placement"><span>02</span> Recent Placements</a></li>
                        <li><a href="#top_picks"><span>03</span> Top Picks</a></li>
                        <li><a href="#latest_projects"><span>04</span> Projects</a></li>
                        <li><a href="#why_choose_skill_lync"><span>05</span> Why Choose SKILL-LYNC?</a></li>
                        <li><a href="#our_testimonials"><span>06</span> Testimonials</a></li>
                        <li><a href="#latest_blogs"><span>07</span> Latest Blogs</a></li>
                        <li><a href="#latest_news"><span>08</span> Latest News</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

<?php 
	
	$this->load->view('frontend/common/footer_menu'); 
	
	$this->load->view('frontend/home/footer'); 
	
?>