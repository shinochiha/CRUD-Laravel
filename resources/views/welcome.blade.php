<table id="table-1" style="width: 100%; border-collapse: collapse; background-color: #54acd2; color: #ffffff; font-family: Arial,Helvetica,sans-serif;">
<tbody>
<tr>
<td style="padding: 20px; font-size: 36px; width: 30%;"><strong>INVOICE</strong></td>
<td style="padding: 20px; text-align: right; font-size: 14px; vertical-align: top; width: 70%;"><strong>{company.name}</strong> <br />{company.address} <br />{company.city}, {company.country_name}, {company.postal_code} <br />{company.phone} {company.email}</td>
</tr>
</tbody>
</table>
<table id="table-2" style="width: 100%; border-collapse: collapse; font-family: Arial,Helvetica,sans-serif; font-size: 14px;">
<tbody>
<tr>
<td style="padding: 20px; width: 40%; vertical-align: bottom;" rowspan="2"><span style="color: #475577;">To :</span> <br /><strong>{customer.name}</strong> <br /><br /><span style="color: #475577;">Address :</span> <br /><strong style="font-size: 12px;">{billing_address.complete_address}</strong></td>
<td style="padding: 20px; width: 5%; text-align: right; vertical-align: top;"> </td>
<td style="padding: 20px; width: 5%; text-align: right; vertical-align: top;"> </td>
<td style="padding: 20px; width: 10%; text-align: right; vertical-align: top;"> </td>
<td style="padding: 20px; width: 40%; text-align: right; vertical-align: bottom;"><span style="color: #475577;">Invoice Amount :</span> <br /><strong style="color: #54acd2; font-size: 28px;">{currency.symbol}{total_amount_origin}</strong></td>
</tr>
<tr>
<td style="padding: 20px; width: 20%; text-align: center; vertical-align: top;"><span style="color: #475577;">Order Number :</span> <br /><strong style="font-size: 16px;"> <!--orders-->{orders.number} <!--orders--> </strong></td>
<td style="padding: 20px; width: 20%; text-align: center; vertical-align: top;"><span style="color: #475577;">Invoice Number :</span> <br /><strong style="font-size: 16px;">{number}</strong></td>
<td style="padding: 20px; width: 20%; text-align: center; vertical-align: top;"><span style="color: #475577;">Invoice Date :</span> <br /><strong style="font-size: 16px;">{date}</strong></td>
<td style="padding: 20px; width: 20%; text-align: center; vertical-align: top;"><span style="color: #475577;">Due Date :</span> <br /><strong style="font-size: 16px;"> <!--term_of_payments-->{term_of_payments.due_date} <!--term_of_payments--> </strong></td>
</tr>
</tbody>
</table>
<div style="padding: 0px 20px 20px 20px;">
<table id="table-3" style="width: 100%; font-family: Arial,Helvetica,sans-serif; border-collapse: collapse; font-size: 14px;">
<thead>
<tr>
<th style="width: 13%; padding: 8px; background-color: #54acd2; color: #fff; text-align: left;">Product Code</th>
<th style="width: 17%; padding: 8px; background-color: #54acd2; color: #fff; text-align: left;">Description</th>
<th style="width: 15%; padding: 8px; background-color: #54acd2; color: #fff; text-align: right;">Quantity</th>
<th style="width: 15%; padding: 8px; background-color: #54acd2; color: #fff; text-align: right;">Unit Price</th>
<th style="width: 15%; padding: 8px; background-color: #54acd2; color: #fff; text-align: right;">Discount</th>
<th style="width: 15%; padding: 8px; background-color: #54acd2; color: #fff; text-align: right;">Amount</th>
<th style="width: 20%; padding: 8px; background-color: #54acd2; color: #fff; text-align: right;">Tax</th>
</tr>
</thead>
<tbody class="striped"><!--line_items-->
<tr>
<td style="padding: 8px;">{item.product.code}</td>
<td style="padding: 8px;">{item.description}</td>
<td style="padding: 8px; text-align: right;">{item.quantity} {item.unit.name}</td>
<td style="padding: 8px; text-align: right;">{currency.symbol}{item.unit_price}</td>
<td style="padding: 8px; text-align: right;">{item.discount.rate}</td>
<td style="padding: 8px; text-align: right;">{currency.symbol}{item.amount}</td>
<td style="padding: 8px; text-align: right;">{item.taxes.rate}%</td>
</tr>
<!--line_items--></tbody>
</table>
<table id="table-4" style="width: 100%; font-family: Arial,Helvetica,sans-serif; border-collapse: collapse; font-size: 14px;">
<thead>
<tr>
<td style="padding: 8px; width: 68%; border: 1px 0px 0px 0px solid #54acd2; color: white;"> </td>
<td style="padding: 8px; width: 15%; border: 1px 0px 0px 0px solid #54acd2;"> </td>
<td style="padding: 8px; width: 2%; border: 1px 0px 0px 0px solid #54acd2;"> </td>
<td style="padding: 8px; width: 15%; border: 1px 0px 0px 0px solid #54acd2; text-align: right;"> </td>
</tr>
</thead>
<tbody>
<tr>
<td style="padding: 8px; width: 68%; border-top: 1px solid #54acd2;"> </td>
<td style="padding: 8px; width: 15%; border-top: 1px solid #54acd2;">Subtotal</td>
<td style="padding: 8px; width: 2%; border-top: 1px solid #54acd2;">:</td>
<td style="padding: 8px; width: 15%; border-top: 1px solid #54acd2; text-align: right;">{currency.symbol}{subtotal_before_tax_origin}</td>
</tr>
<tr>
<td style="padding: 8px; width: 68%; border-top: 0px solid #54acd2;"> </td>
<td style="padding: 8px; width: 15%; border-top: 0px solid #54acd2;">Down Payment</td>
<td style="padding: 8px; width: 2%; border-top: 0px solid #54acd2;">:</td>
<td style="padding: 8px; width: 15%; border-top: 0px solid #54acd2; text-align: right;">{currency.symbol}{total_cash_amount_origin}</td>
</tr>
<tr>
<td style="padding: 8px; width: 68%; border-top: 0px solid #54acd2;"> </td>
<td style="padding: 8px; width: 15%; border-top: 0px solid #54acd2;">Final Discount</td>
<td style="padding: 8px; width: 2%; border-top: 0px solid #54acd2;">:</td>
<td style="padding: 8px; width: 15%; border-top: 0px solid #54acd2; text-align: right;">{currency.symbol}{final_discount.amount_origin}</td>
</tr>
<tr>
<td style="padding: 8px;"> </td>
<td style="padding: 8px;">Total Tax</td>
<td style="padding: 8px;">:</td>
<td style="padding: 8px; text-align: right;">{currency.symbol}{total_tax_origin}</td>
</tr>
<tr>
<td style="padding: 8px;"> </td>
<td style="padding: 8px;">Others</td>
<td style="padding: 8px;">:</td>
<td style="padding: 8px; text-align: right;">{currency.symbol}{total_other_origin}</td>
</tr>
<tr>
<td style="padding: 8px;"> </td>
<td style="padding: 8px;"><strong>Total Amount</strong></td>
<td style="padding: 8px;">:</td>
<td style="padding: 8px; text-align: right;"><strong>{currency.symbol} {balance_origin}</strong></td>
</tr>
</tbody>
</table>
</div>
<table id="table-5" style="width: 100%; border-collapse: collapse; font-family: Arial,Helvetica,sans-serif; font-size: 14px;">
<tbody>
<tr>
<td style="padding: 50px; width: 35%; text-align: center; vertical-align: top;">Salesman: <br /><br /><br /><br /><br /><br /><br />______ <br /><!--employees-->
<p>{employees.contact.name}</p>
<!--employees--></td>
<td style="padding: 50px; width: 32,5%; text-align: center; vertical-align: top;"> </td>
<td style="padding: 50px; width: 32,5%; text-align: center; vertical-align: top;"> </td>
<td style="padding: 50px; width: 32,5%; text-align: center; vertical-align: top;"> </td>
</tr>
</tbody>
</table>