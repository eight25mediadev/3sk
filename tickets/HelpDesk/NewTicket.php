<?php

global $client;

$customerid = $_SESSION['customer_id'];
$sessionid = $_SESSION['customer_sessionid'];

$params = Array(Array('id'=>"$customerid", 'sessionid'=>"$sessionid"));
$result = $client->call('get_combo_values', $params, $Server_Path, $Server_Path);

$_SESSION['combolist'] = $result;
$combolist = $_SESSION['combolist'];
for($i=0;$i<count($result);$i++)
{
	if($result[$i]['productid'] != '')
	{
		$productslist[0] = $result[$i]['productid'];
	}
	if($result[$i]['productname'] != '')
	{
		$productslist[1] = $result[$i]['productname'];
	}
	if($result[$i]['ticketpriorities'] != '')
	{
		$ticketpriorities = $result[$i]['ticketpriorities'];
	}
	if($result[$i]['ticketseverities'] != '')
	{
		$ticketseverities = $result[$i]['ticketseverities'];
	}
	if($result[$i]['ticketcategories'] != '')
	{
		$ticketcategories = $result[$i]['ticketcategories'];
	}
	if($result[$i]['servicename'] != ''){
		$servicename = $result[$i]['servicename'];
	}
	if($result[$i]['serviceid'] != ''){
		$serviceid= $result[$i]['serviceid'];
	}
}

if($productslist[0] != '#MODULE INACTIVE#'){
	$noofrows = count($productslist[0]);
	
	for($i=0;$i<$noofrows;$i++)
	{
		if($i > 0)
			$productarray .= ',';
		$productarray .= "'".$productslist[1][$i]."'";
	}
}
if($servicename == '#MODULE INACTIVE#' || $serviceid == '#MODULE INACTIVE#'){
	unset($servicename); 
	unset($serviceid);
}

?>

<main class="customer-signup">	
<section>
	<h2 hidden>Request Form</h2>
	<div class="container">
		<div class="formsection">
			<div class="form-title"><h3>Please Fill the details</h3></div>
			<form name="Save" method="post" action="index.php" role="form">
	   			<input type="hidden" name="module" value="HelpDesk">
	   			<input type="hidden" name="action" value="index">
	   			<input type="hidden" name="fun" value="saveticket">
	   			<input type="hidden" name="projectid" value="<?php echo $_REQUEST['projectid'] ?>" />
	        	<div class="col-md-12">
					<div class="box box-primary">
						<div class="box-body">
						
							<div class="inputfield form-group">							
								<input type="text" name="title" class = "form-control" placeholder="<?PHP echo getTranslatedString('TICKET_TITLE');?>">
							</div>
							
							</div>
							<div class="selectionfield form-group">
								<?php echo getComboList('priority',$ticketpriorities); ?>
							</div>
							<div class="selectionfield form-group">
								<?php echo getComboList('category',$ticketcategories);?>
							</div>
							<div class="selectionfield form-group">
								<?php echo getComboList('severity',$ticketseverities); ?>
							</div>
							<div class="inputfield form-group">
								<textarea name="description" cols="55" rows="5" class="form-control"></textarea>
							</div>
							<div class="box-footer button-field">
	                            <button title="<?PHP echo getTranslatedString('LBL_SAVE_ALT');?>" accessKey="S" class="btn btn-primary" value="<?PHP echo getTranslatedString('LBL_SAVE');?>" onclick="return formvalidate(this.form)" type="submit" name="button">
	                            	Submit
	                            </button>
	                            <button title="<?PHP echo getTranslatedString('LBL_CANCEL_ALT');?>" accessKey="X" class="btn btn-primary" onclick="window.history.back()" type="button" name="button"  value="<?PHP echo getTranslatedString('LBL_CANCEL');?>">
	                            	Cancel
	                           	</button>
							</div>
						</div>
	   				</div>
	   			</div>
	   		</div>
		</form>
					</div>	
				</div>
			</section>	
		</main>
<script>
function formvalidate(form)
{
	if(trim(form.title.value) == '')
	{
		alert("Ticket Title is empty");
		return false;
	}
	return true;
}
function trim(s) 
{
	while (s.substring(0,1) == " ")
	{
		s = s.substring(1, s.length);
	}
	while (s.substring(s.length-1, s.length) == ' ')
	{
		s = s.substring(0,s.length-1);
	}

	return s;
}
</script>
<?php

?>
