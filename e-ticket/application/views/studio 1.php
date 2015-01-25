<button style="width:100%;background-color:red;" class="btn btn-lg btn-primary" type="button">Layar</button>
<form method="post" action="<?php echo site_url('buy/ordered/'.$tayang.'/'.$this->session->userdata('username'));?>" id="mform" class="form-horizontal" onsubmit="getvaluebutton()">
 <div class="btn-group" data-toggle="buttons checkbox">
   <table border="0" width="100%">
<tr colspan="8" height="30"><td></td></tr>
<?php
$i=1;
foreach($seat as $j) {
	if($i==1 || $i==7 || $i==15|| $i==23){?>
<tr>	
	<?php } ?>
<td width="12.5%">
<button name="<?php echo $j->getId();?>" value="<?php echo $j->getId();?>" <?php foreach($trans as $k){ if($k->getIdSeat()==$j->getId()){echo "disabled";} }?> style="width:100%;" type="button" class="btn btn-primary"><?php echo $j->getNoKursi();?></button>
</td>
<?php if($i==3){
	?>
<td width="12.5%"></td>
<td width="12.5%"></td>	
	<?php
}?>
<?php
if($i==6||$i==14|| $i==22|| $i==30){?>
	</tr>
<?php
	}
$i=$i+1;
}?> 
</table>	
 </div>
 <br>
<br>
<br>
<br>
<br>
<br>
<br>
 <button style="width:100%;background-color:green;" class="btn btn-lg btn-primary" type="submit">Buy Ticket !</button>
</form>
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