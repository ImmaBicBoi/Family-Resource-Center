<!DOCTYPE html>
<html>
	<body>
		<div style='font-size: 14pt; color: #A10A0A; text-align: center;'>
			You have received a new message from {name}. The details of the inquiry are below:
		</div>

		<br>
		<br>

		<table style='font-size: 14pt; width: 80%; margin: auto;' border="0">
			<tr>
				<td><strong>From:</strong></td>
				<td rowspan="3" style='padding-right: 15px;'>&nbsp;</td>
				<td>{name}</td>
			</tr>
			
			<tr>
				<td><strong>Email:</strong></td>
				<td>{email}</td>
			</tr>
			
			<tr>
				<td><strong>Phone:</strong></td>
				<td> {phone} </td>
			</tr>
			
			<tr><td colspan='3'><br></td></tr>
			
			<tr>
				<td colspan='3'><strong>Message:</strong></td>
			</tr>
			
			<tr>
				<td colspan='3' style='padding-left: 20px;'> {message} </td>
			</tr>
		</table>
	</body>
</html>