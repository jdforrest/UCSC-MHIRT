<?php 
/**
 * @package WordPress
 * @subpackage sigma
 * 
 * Displays content for a single post / page / post type
 */
the_post();
?>
<style>
	.main img{
		float: right; 
		margin: 0 0 10px 10px;
	}
</style>
<div class="content">
	<div class="two-thirds column alpha pull-right">
       <div class="main"> 
                        
        <article id="post-<?php the_ID(); ?>">
        
			<div class="title">            
				<h2>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a> 
				</h2><!--Post titles-->
			</div>
			
        	<?php the_post_thumbnail( array(400, 400) ); ?>
			        	     
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sigmatheme' ) ); ?>
             
             <div class="pagelink"><?php wp_link_pages('pagelink=Page %'); ?></div>
	 
             <!--The Meta, Author, Date, Categories and Comments-->
             <?php  if( !is_page() ): //Don't show meta on pages ?>  
              
				<div class="meta">
				
					<?php 
					printf(
						esc_html__( "Posted on: %s", "sigmatheme" ),
						'<a href="' . get_permalink() .'">' . get_the_date() . '</a>'
					);
					
					if( is_multi_author() && ( $author_id = sigmatheme_get_author_id() ) ){
						printf( 
							" | " . esc_html__( "Author: %s", "sigmatheme" ), 
							'<a href="' . get_author_posts_url( $author_id ) . '">' . get_the_author() .'</a>' 
						);
					}
					
					edit_post_link( __( 'Edit', 'sigmatheme' ), ' | <span class="edit-link">', '</span>' );
					 
					if( has_category() ){
						printf( '<div>' . esc_html__( 'Categories: %s', 'sigmatheme') . '</div>', get_the_category_list(' ') );
					}
					
					if( has_tag() ){
						echo '<div>' . get_the_tag_list( esc_html__( 'Tags:','sigmatheme' ) . ' ', ' ' ) . '</div>';
					}
					?>
					
				</div>
              
              <?php endif; ?>
        </article>
        
        <div style="clear:both"></div>
        
        <?php if( !is_page() ): //Don't show navigation on pages ?>
        	<nav id="nav-below" class="nav clearfix">  
        		<?php 
        			/* Display navigation to next/previous pages when applicable */
	        		previous_post_link('<span class="pull-left alpha"> &laquo; <strong>%link</strong> </span>');
    	    		next_post_link('<span class="pull-right sigma"><strong>%link</strong> &raquo; </span>');
        		?>
        	</nav>
  		<?php endif; ?>
            

     
      </div>  <!-- End Main -->
	</div>  <!-- End two-thirds column -->
</div><!-- End Content -->
    
