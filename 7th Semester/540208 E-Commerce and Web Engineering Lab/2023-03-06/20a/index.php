<?php include('top.php'); ?>
<pre>
Instruction for image: 
src = source / path / url of image 
*path/url:
	i. internal = logo.jpg or images/logo.jpg
	ii. external = http://www.abc.com/logo.jpg 
*Image type/format/extension = jpg, jpeg, png, gif, svg, bmp, webp, etc.. 
</pre>
<div>
	<img src="rose.png" alt="Rose Flower" width="200px" height="150px" title="Rose Flower"> 
</div>
HTML List: <br> 
<u>Ordered List</u>	
<ol type="i">
	<li>Item</li>
	<li>Item</li>
	<li>Item</li>
</ol>
		
<u>Unordered List</u>
<ul type="square">
	<li>Item</li>
	<li>Item</li>
	<li>Item</li>
</ul>	

HTML table
<table border="1px" width="50%">
	<thead>
		<tr>
			<th> ID </th>
			<th> Name </th>
			<th> DoB </th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td> 1 </td> <td> Mr. Rahim </td> <td> 01/05/2000</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="3"> Table footer </td>
		</tr>
	</tfoot>
	<caption>Student Information</caption>
</table>

<?php include('footer.php'); ?>