<?php
/**
 * The MIT License (MIT)
 *
 * Webzash - Easy to use web based double entry accounting software
 *
 * Copyright (c) 2014 Prashant Shah <pshah.mumbai@gmail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
?>
<div>
	<div class="col-md-4">
		<div class="panel panel-info">
			<div class="panel-heading"><?php echo __d('webzash', 'Account details'); ?></div>
			<div class="panel-body">
				<table>
					<tr>
						<td><?php echo __d('webzash', 'Name'); ?></td>
						<td><?php echo Configure::read('Account.name'); ?></td>
					</tr>
					<tr>
						<td><?php echo __d('webzash', 'Email'); ?></td>
						<td><?php echo Configure::read('Account.email'); ?></td>
					</tr>
					<tr>
						<td><?php echo __d('webzash', 'Currency'); ?></td>
						<td><?php echo Configure::read('Account.currency_symbol'); ?></td>
					</tr>
					<tr>
						<td><?php echo __d('webzash', 'Financial Year'); ?></td>
						<td><?php echo dateFromSql(Configure::read('Account.startdate')) . ' - ' . dateFromSql(Configure::read('Account.enddate')); ?></td>
					</tr>
					<tr>
						<td><?php echo __d('webzash', 'Status'); ?></td>
						<td><?php echo Configure::read('Account.locked') == 0 ? __d('webzash', 'Unlocked') : __d('webzash', 'Locked') ; ?></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="panel panel-info">
			<div class="panel-heading"><?php echo __d('webzash', 'Bank & cash summary'); ?></div>
			<div class="panel-body">
				<table>
				<?php
					foreach ($ledgers as $ledger) {
						echo '<tr>';
						echo '<td>' . $ledger['name'] . '</td>';
						echo '<td>' . toCurrency($ledger['balance']['dc'], $ledger['balance']['balance']) . '</td>';
						echo '</tr>';
					}
				?>
				</table>
			</div>
		</div>
		<div class="panel panel-info">
			<div class="panel-heading"><?php echo __d('webzash', 'Account summary'); ?></div>
			<div class="panel-body">
				<table>
					<tr>
						<td><?php echo __d('webzash', 'Assets'); ?></td>
						<td><?php echo toCurrency($accsummary['assets_total_dc'], $accsummary['assets_total']); ?></td>
					</tr>
					<tr>
						<td><?php echo __d('webzash', ' Liabilities and Owners Equity'); ?></td>
						<td><?php echo toCurrency($accsummary['liabilities_total_dc'], $accsummary['liabilities_total']); ?></td>
					</tr>
					<tr>
						<td><?php echo __d('webzash', 'Income'); ?></td>
						<td><?php echo toCurrency($accsummary['income_total_dc'], $accsummary['income_total']); ?></td>
					</tr>
					<tr>
						<td><?php echo __d('webzash', 'Expense'); ?></td>
						<td><?php echo toCurrency($accsummary['expense_total_dc'], $accsummary['expense_total']); ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-info">
			<div class="panel-heading"><?php echo __d('webzash', 'Recent activity'); ?></div>
			<div class="panel-body">
			</div>
		</div>
	</div>
</div>

