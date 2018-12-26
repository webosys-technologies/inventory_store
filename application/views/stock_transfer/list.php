<?php 
	$this->load->view('layout/header');

  $user_session = $this->session->userdata('userRole');
  
  if(empty($user_session))
  {
    redirect('auth','refresh');
  }
  if(!in_array("add_purchase",$user_session)){
      redirect('auth','refresh');
  }

?>
<div class="content-wrapper">
    <section class="content">
     <div class="box-footer">
          <h4 class="box-title">
            <!-- Purchases -->
            <?php echo $this->lang->line('lbl_purchase_heading');?>
            <?php if(in_array("add_purchase",$user_session)){?>
              <a class="btn btn-primary btn-flat pull-right" href="<?php echo base_url()?>Stock_transfer/add_stock"><i class="fa fa-user-plus"></i> 
              <!-- New Purchase -->
              <?php echo "Transfer Stock";?>
              </a>
            <?php } ?>
          </h4>

      </div>
      <br>   
      <?php if($this->session->flashdata('success')) { ?>
          <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-info"></i> 
            <?php echo $this->lang->line('alert');?>
            </h4>
            <?php echo $this->session->flashdata('success');?>
          </div>
      <?php } ?>
       <div class="row">
          <div class="col-xs-12">
             <div class="box">
            <div class="box-body">
              <table id="indexdesc" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>
                    <!-- Inavoice# -->
                    <?php echo "ID";?>
                  </th>
                   <th>
                  Date
                  </th>
                  <th>
                    <!-- Supplier Name -->
                    <?php echo "Warehouse(From)";?>
                  </th>
                  <th>
                    <!-- Total -->
                    <?php echo "Warehouse(To)";?>
                  </th>
              
                   <th>
                    <!-- Date -->
                    <?php echo "Total";?>
                  </th>
                 
<!--                  <th>
                     Action 
                    <?php // echo $this->lang->line('lbl_purchase_action');?>
                  </th>-->
                </tr>
                </thead>
                

                <tbody>
                    <tr>
                        
                    </tr>
                </tbody>
                <tfoot>
                 <tr>
                   <th>
                    <!-- Inavoice# -->
                    <?php echo "ID";?>
                  </th>
                   <th>
                  Date
                  </th>
                  <th>
                    <!-- Supplier Name -->
                    <?php echo "Warehouse(From)";?>
                  </th>
                  <th>
                    <!-- Total -->
                    <?php echo "Warehouse(To)";?>
                  </th>
              
                   <th>
                    <!-- Date -->
                    <?php echo "Total";?>
                  </th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
        </div>
      </div>
    </section> 
</div>     

<?php 
	$this->load->view('layout/footer');
?>

<script type="text/javascript">

    window.setTimeout(function() {
        $(".alert").fadeTo(400, 0).slideUp(400, function(){
            $(this).remove(); 
        });
    }, 4000);


  </script>