	
	
	
	<table width="100%" id="ProfitTable" class="adminPublisherTable">
		<tr>
			<th>Product</th>
			<th>Today #</th>
			<th>Today</th>
			<th>MTD #</th>
			<th>MTD</th>
			<th>Overall #</th>
			<th>Overall</th>
			<th>Refunds</th>
			<th>Total Sales</th>
		</tr>
		<tr>
			<td>PPVSpy Monthly</td>
			<td><?=$this->PPVSpyMonthlyTodayCount?></td>
			<td>$<?=number_format($this->PPVSpyMonthlyToday, 2)?></td>
			
			<td><?=$this->PPVSpyMonthlyMTDCount?></td>
			<td>$<?=number_format($this->PPVSpyMonthlyMTD, 2)?></td>
			
			<td><?=$this->PPVSpyMonthlyOverallCount?></td>
			<td>$<?=number_format($this->PPVSpyMonthlyOverall, 2)?></td>
			
			<td>$<?=number_format($this->PPVSpyMonthlyRefunds, 2)?></td>
			<td>$<?=number_format($this->PPVSpyMonthlyOverall+$this->PPVSpyMonthlyRefunds, 2)?></td>
		</tr>
		<tr>
			<td>PPVSpy OneTime</td>
			<td><?=$this->PPVSpyOneTimeTodayCount?></td>
			<td>$<?=number_format($this->PPVSpyOneTimeToday, 2)?></td>
			
			<td><?=$this->PPVSpyOneTimeMTDCount?></td>
			<td>$<?=number_format($this->PPVSpyOneTimeMTD, 2)?></td>
			
			<td><?=$this->PPVSpyOneTimeOverallCount?></td>
			<td>$<?=number_format($this->PPVSpyOneTimeOverall, 2)?></td>
			
			<td>$<?=number_format($this->PPVSpyOneTimeRefunds, 2)?></td>
			<td>$<?=number_format($this->PPVSpyOneTimeOverall+$this->PPVSpyOneTimeRefunds, 2)?></td>
		</tr>
		<tr>
			<td>Server Charge</td>
			<td><?=$this->ServerTodayCount?></td>
			<td>$<?=number_format($this->ServerToday, 2)?></td>
			
			<td><?=$this->ServerMTDCount?></td>
			<td>$<?=number_format($this->ServerMTD, 2)?></td>
			
			<td><?=$this->ServerOverallCount?></td>
			<td>$<?=number_format($this->ServerOverall, 2)?></td>
			
			<td>$<?=number_format($this->ServerRefunds, 2)?></td>
			<td>$<?=number_format($this->ServerOverall+$this->ServerRefunds, 2)?></td>
		</tr>
		<tr>
			<td>Self-Hosted</td>
			<td><?=$this->SelfHostedTodayCount?></td>
			<td>$<?=number_format($this->SelfHostedToday, 2)?></td>
			
			<td><?=$this->SelfHostedMTDCount?></td>
			<td>$<?=number_format($this->SelfHostedMTD, 2)?></td>
			
			<td><?=$this->SelfHostedOverallCount?></td>
			<td>$<?=number_format($this->SelfHostedOverall, 2)?></td>
			
			<td>$<?=number_format($this->SelfHostedRefunds, 2)?></td>
			<td>$<?=number_format($this->SelfHostedOverall+$this->SelfHostedRefunds, 2)?></td>
		</tr>
		<tr>
			<td>PPC</td>
			<td><?=$this->PPCTodayCount?></td>
			<td>$<?=number_format($this->PPCToday, 2)?></td>
			
			<td><?=$this->PPCMTDCount?></td>
			<td>$<?=number_format($this->PPCMTD, 2)?></td>
			
			<td><?=$this->PPCOverallCount?></td>
			<td>$<?=number_format($this->PPCOverall, 2)?></td>
			
			<td>$<?=number_format($this->PPCRefunds, 2)?></td>
			<td>$<?=number_format($this->PPCOverall+$this->PPCRefunds, 2)?></td>
		</tr>
		<tr>
			<td style="border-bottom: 0px;">Networks</td>
			<td style="border-bottom: 0px;"><?=$this->NetworkPaymentTodayCount?></td>
			<td style="border-bottom: 0px;">$<?=number_format($this->NetworkPaymentToday, 2)?></td>
			
			<td style="border-bottom: 0px;"><?=$this->NetworkPaymentMTDCount?></td>
			<td style="border-bottom: 0px;">$<?=number_format($this->NetworkPaymentMTD, 2)?></td>
			
			<td style="border-bottom: 0px;"><?=$this->NetworkPaymentOverallCount?></td>
			<td style="border-bottom: 0px;">$<?=number_format($this->NetworkPaymentOverall, 2)?></td>
			
			<td style="border-bottom: 0px;">$<?=number_format(0, 2)?></td>
			<td style="border-bottom: 0px;">$<?=number_format($this->NetworkPaymentOverall+0, 2)?></td>
		</tr>
		<tr>
			<td colspan="9" style="border-bottom: 0px;">
				<hr style="border: 1px #000 solid; width: 100%;" />
			</td>
		</tr>
		<tr>
			<td>PPVSpy Total</td>
			<td><?=$this->PPVSpyTodayCount?></td>
			<td>$<?=number_format($this->PPVSpyToday, 2)?></td>
			
			<td><?=$this->PPVSpyMTDCount?></td>
			<td>$<?=number_format($this->PPVSpyMTD, 2)?></td>
			
			<td><?=$this->PPVSpyOverallCount?></td>
			<td>$<?=number_format($this->PPVSpyOverall, 2)?></td>
			
			<td>$<?=number_format($this->PPVSpyRefunds, 2)?></td>
			<td>$<?=number_format($this->PPVSpyOverall+$this->PPVSpyRefunds, 2)?></td>
		</tr>
		<tr>
			<td>Total</td>
			<td><?=($this->PPVSpyMonthlyTodayCount+$this->PPVSpyOneTimeTodayCount+$this->ServerTodayCount+$this->SelfHostedTodayCount+$this->PPCTodayCount+$this->NetworkPaymentTodayCount)?></td>
			<td>$<?=number_format($this->PPVSpyMonthlyToday+$this->PPVSpyOneTimeToday+$this->ServerToday+$this->SelfHostedToday+$this->PPCToday+$this->NetworkPayment, 2)?></td>
			
			<td><?=($this->PPVSpyMonthlyMTDCount+$this->PPVSpyOneTimeMTDCount+$this->ServerMTDCount+$this->SelfHostedMTDCount+$this->PPCMTDCount+$this->NetworkPaymentMTDCount)?></td>
			<td>$<?=number_format($this->PPVSpyMonthlyMTD+$this->PPVSpyOneTimeMTD+$this->ServerMTD+$this->SelfHostedMTD+$this->PPCMTD+$this->NetworkPaymentMTD, 2)?></td>
			
			<td><?=($this->PPVSpyMonthlyOverallCount+$this->PPVSpyOneTimeOverallCount+$this->ServerOverallCount+$this->SelfHostedOverallCount+$this->PPCOverallCount+$this->NetworkPaymentOverallCount)?></td>
			<td>$<?=number_format($this->PPVSpyMonthlyOverall+$this->PPVSpyOneTimeOverall+$this->ServerOverall+$this->SelfHostedOverall+$this->PPCOverall+$this->NetworkPaymentOverall, 2)?></td>
			
			<td>$<?=number_format($this->PPVSpyMonthlyRefunds+$this->PPVSpyOneTimeRefunds+$this->ServerRefunds+$this->SelfHostedRefunds+$this->PPCRefunds+0, 2)?></td>
			<td>$<?=number_format($this->PPVSpyMonthlyOverall+$this->PPVSpyOneTimeOverall+$this->ServerOverall+$this->SelfHostedOverall+$this->PPCOverall+$this->NetworkPaymentOverall+$this->PPVSpyMonthlyRefunds+$this->PPVSpyOneTimeRefunds+$this->ServerRefunds+$this->SelfHostedRefunds+$this->PPCRefunds+0, 2)?></td>
		</tr>
	</table>
	
	<script type="text/javascript">
		$(document).ready(function(){

			  $('#ProfitTable tr').hover(
					   function()
					   {
					   		$(this).addClass("lightBlueRow");
					   },
					   function()
					   {
					   		$(this).removeClass("lightBlueRow");
					   }
			  );
			  
		 });
	</script>
	