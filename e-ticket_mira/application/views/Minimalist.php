<legend>Pick your seat(s)</legend>
<label>Total: </label>
<center>
<form method="post" action="<?php echo site_url('buy/ordered/'.$tayang.'/'.$this->session->userdata('username'));?>" id="mform" class="form-horizontal" onsubmit="getvaluebutton()">
<div class="btn-group" data-toggle="buttons checkbox">
<table border="0" width="100%">
<tr colspan="8" height="30"><td></td></tr>
<?php
$i=1; 
$row=1;
foreach($seat as $j) {
	if($i==1){?>
	<tr>	
	<?php } ?>
		<td width="12.5%">
			<button name="<?php echo $j->getId();?>" value="<?php echo $j->getId();?>" <?php foreach($trans as $k){ if($k->getIdSeat()==$j->getId()){echo "disabled";} }?> style="width:100%;" type="button" class="btn btn-primary"><?php echo $j->getNoKursi();?></button>
		</td>
	<?php if($row > 2 && $i-3==0){?>
		<td width="12.5%"></td>
		<td width="12.5%"></td>
		<td width="12.5%"></td>	
	<?php
	}
	if($i==9 || ($row > 2 && $i==6)){ 
		$i=0; 
		$row=$row+1; ?>
	</tr>
	<?php
	}
	$i=$i+1;
	}?> 
</table>
<br>
<br>	
<button style="width:100%;background-color:red;" class="btn btn-lg btn-primary" type="button" disabled>Layar</button>
 </div>
<br>
<br>
<button style="background-color:green;" class="btn btn-lg btn-primary" type="submit">Buy!</button>
</form>
</center>
<script>
function getvaluebutton()
{
	var arrtrans;
	$('#mform .btn').each(function() {
        var input = document.createElement("input");
        input.setAttribute("type", "hidden");
        input.setAttribute("name", this.name);
        input.setAttribute("value", "null");
        document.getElementById("mform").appendChild(input);
    });
    $('#mform .btn.active').each(function() {
        var input = document.createElement("input");
        input.setAttribute("type", "hidden");
        input.setAttribute("name", this.name);
        input.setAttribute("value", this.value);
        document.getElementById("mform").appendChild(input);
    });
}
 </script>