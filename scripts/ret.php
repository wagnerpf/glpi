<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!--
* ToDo: (eu sei q ta aparecendo no formulario, é so pra n esquecer e_e')
* Nome do campus, tirar essa informação da entidade em que a pessoa solicitou (não faço ideia de onde encontrar isso)
* Não consegui fazer comparação com os dados do $Row[] ...
-->
<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "glpi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
?>

<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1252"/>
	<title>sum&aacute;rio executivo Cerne 2018</title>
	<meta name="generator" content="LibreOffice 6.0.5.2 (Windows)"/>
	<meta name="author" content="Luciano Vale"/>
	<meta name="created" content="2018-09-13T19:11:00"/>
	<meta name="changed" content="2019-01-28T11:37:11.817000000"/>
	<style type="text/css">
		@page { margin-left: 3.5cm; margin-right: 1.5cm }
		p { margin-bottom: 0.21cm }
		td p { margin-bottom: 0cm }
		a:link { so-language: zxx }
	</style>
</head>
<body lang="pt-BR" dir="ltr">
<div title="header">
	<p style="margin-top: 0.42cm; margin-bottom: 0.5cm; page-break-after: avoid">
	<img src="1-Relat%C3%B3rio%20Sensibiliza%C3%A7%C3%A3o%20Prospec%C3%A7%C3%A3o%20e%20Qualifica%C3%A7%C3%A3o%20de%20Empreendimentos_html_6fc2ccb7a4aa66b.png" name="Figura3" align="left" width="167" height="49">
  <br clear="left"/>
</img>
<br/>
<br/>

	</p>
</div>
<p align="center" style="margin-bottom: 0cm; orphans: 2; widows: 2"><img src="1-Relat%C3%B3rio%20Sensibiliza%C3%A7%C3%A3o%20Prospec%C3%A7%C3%A3o%20e%20Qualifica%C3%A7%C3%A3o%20de%20Empreendimentos_html_6fc2ccb7a4aa66b.png" name="Figura1" align="left" width="308" height="90">
  <br clear="left"/>
</img>
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><br/>
</font></font></font><br/>

</p>
<p align="center" style="margin-bottom: 0cm; text-transform: uppercase; line-height: 150%; orphans: 2; widows: 2">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 11pt"><b>MINIST&Eacute;RIO
DA EDUCA&Ccedil;&Atilde;O</b></font></font></font></p>
<p align="center" style="margin-bottom: 0cm; text-transform: uppercase; line-height: 150%; orphans: 2; widows: 2">
<font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt">INSTITUTO
FEDERAL DO ESP&Iacute;RITO SANTO</font></font></font></p>
<p align="center" style="margin-bottom: 0cm; text-transform: uppercase; line-height: 150%; orphans: 2; widows: 2">
<font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt">PR&Oacute;-REITORIA
DE EXTENS&Atilde;O</font></font></font></p>
<p align="center" style="margin-bottom: 0cm; line-height: 150%; orphans: 2; widows: 2">
<font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">Avenida
Rio Branco, 50 &ndash; Santa L&uacute;cia &ndash; 29056-255 &ndash;
Vit&oacute;ria &ndash; ES</font></font></font></p>
<p align="center" style="margin-bottom: 0cm"><font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">27
3357-7500</font></font></font></p>
<p align="center" style="margin-bottom: 0cm"><br/>

</p>
<p align="center" style="margin-bottom: 0cm"><br/>

</p>
<p align="center" style="margin-bottom: 0cm"><br/>

</p>
<p align="center"><font color="#000000"><font size="4" style="font-size: 14pt"><b><font face="Arial, sans-serif">R</font><font face="Arial, sans-serif">ELAT&Oacute;RIO
DE </font><font face="Arial, sans-serif">AVALIA&Ccedil;&Atilde;O DE
</font><font face="Arial, sans-serif">SENSIBILIZA&Ccedil;&Atilde;O E
PROSPEC&Ccedil;&Atilde;O </font><font face="Arial, sans-serif">DE
INCUBA&Ccedil;&Atilde;O</font></b></font></font></p>
<p align="center" style="font-weight: normal"><br/>
<br/>

</p>
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>I.
DADOS CADASTRAIS</b></font></font></font></p>
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>
<table width="604" cellpadding="4" cellspacing="0">
	<col width="162">
	<col width="143">
	<col width="274">
	<tr>
		<td colspan="3" width="594" height="21" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 11pt"><b>Identifica&ccedil;&atilde;o</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="162" height="45" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
                    <p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Campus</b></font></font></font></p>
		</td>
		<td colspan="2" width="425" valign="top" style="border: 1px solid #000000; padding: 0.1cm">
                    <p align="center" style="margin-top: 0.05cm">
                        <font color="#000000">
                            <font face="Arial, sans-serif">
                                <font size="4" style="font-size: 16pt">
                                    <b>
                                    ##nome do campus##
                                    </b>
                                </font>
                            </font>
                        </font>
                    </p>
		</td>
	</tr>
        
    <?php
        $sqlGNI = "
        SELECT glpi_users.firstname as nome,
        glpi_users.realname as sobrenome,
        glpi_plugin_fields_userusuariodadospessoais.cpffield as CPF ,
        glpi_plugin_fields_userusuariodadospessoais.siapefield as Siape,
        glpi_useremails.email as email,
        glpi_users.phone as telefone, 
        glpi_entities.name as nucleo
        FROM glpi_users
        INNER JOIN glpi_plugin_fields_userusuariodadospessoais ON (glpi_plugin_fields_userusuariodadospessoais.items_id = glpi_users.id)
        INNER JOIN glpi_useremails ON (glpi_useremails.users_id = glpi_users.id)
        INNER JOIN glpi_usertitles ON (glpi_usertitles.id = glpi_users.usertitles_id)
        INNER JOIN glpi_entities ON (glpi_entities.id = glpi_users.entities_id)
        WHERE glpi_useremails.is_default = 1 and glpi_usertitles.name = 'gestor do NI'
        ";

        $result = $conn->query($sqlGNI);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
    ?>
                
                <tr>
                        <td rowspan="5" width="162" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
                                <p align="center" style="margin-top: 0.05cm; margin-bottom: 0.05cm">
                                <font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>
                                Dados do
                                </b></font></font></font>
                                </p>
                                <p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>
                                Gestor do NI
                                </b></font></font></font></p>
                        </td>
                        <td width="143" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
                                <p align="right" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Nome:</b></font></font></font></p>
                        </td>
                        <td width="274" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
                                <p style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>
                                <?php echo " ".$row["nome"]." ".$row["sobrenome"]." "  ## nome do gestor do NI ## ?>
                                </b></font></font></font></p>
                        </td>
                </tr>
                <tr>
                        <td width="143" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                                <p align="right" style="margin-right: 0.1cm; margin-top: 0.05cm; font-weight: normal">
                                <font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">CPF:</font></font></font></p>
                        </td>
                        <td width="274" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                                <p style="margin-top: 0.1cm; font-variant: normal; font-weight: normal">
                                <font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 10pt">
                                <?php echo " ".$row["CPF"]." " ##CPF do gestor do NI## ?>
                                </font></font></font></p>
                        </td>
                </tr>
                <tr>
                        <td width="143" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                                <p align="right" style="margin-right: 0.1cm; margin-top: 0.05cm; font-weight: normal">
                                <font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">Siape:</font></font></font></p>
                        </td>
                        <td width="274" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                                <p style="margin-top: 0.05cm; font-variant: normal; font-weight: normal">
                                <font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 10pt">
                                <?php echo " ".$row["Siape"]." " ##Siape	do gestor do NI## ?>
                                </font></font></font></p>
                        </td>
                </tr>
                <tr>
                        <td width="143" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                                <p align="right" style="margin-right: 0.1cm; margin-top: 0.05cm; font-weight: normal">
                                <font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">E-mail:</font></font></font></p>
                        </td>
                        <td width="274" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                                <p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                <?php echo " ".$row["email"]." " ##Email do bolsista##?>
                                </span></font></font></font></p>
                        </td>
                </tr>
                <tr>
                        <td width="143" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                                <p align="right" style="margin-right: 0.1cm; margin-top: 0.05cm; font-weight: normal">
                                <font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">Telefone:</font></font></font></p>
                        </td>
                        <td width="274" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                                <p style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                <?php echo " ".$row["telefone"]." " ##telefone do gestor do NI## ?>
                                </font></font></font></p>
                        </td>
                </tr>
    <?php		 
            }
        }
    ?>
    <?php
        $sqlBolsista = "
        SELECT glpi_users.firstname as nome,
        glpi_users.realname as sobrenome,
        glpi_plugin_fields_userusuariodadospessoais.cpffield as CPF ,
        glpi_useremails.email as email,
        glpi_users.phone as telefone, 
        glpi_entities.name as nucleo,
        glpi_usertitles.name as titulo
        FROM glpi_users
        INNER JOIN glpi_plugin_fields_userusuariodadospessoais ON (glpi_plugin_fields_userusuariodadospessoais.items_id = glpi_users.id)
        INNER JOIN glpi_useremails ON (glpi_useremails.users_id = glpi_users.id)
        INNER JOIN glpi_usertitles ON (glpi_usertitles.id = glpi_users.usertitles_id)
        INNER JOIN glpi_entities ON (glpi_entities.id = glpi_users.entities_id)
        WHERE glpi_useremails.is_default = 1 
        and glpi_usertitles.name != 'gestor do NI'
        and glpi_entities.name = 'Itapina'
        ORDER by titulo
        ";

        $result = $conn->query($sqlBolsista);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()){ 
    ?>        
	<tr>
            <td rowspan="4" width="162" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                    <p align="center" style="margin-top: 0.05cm; margin-bottom: 0.05cm">
                    <font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>
                    Dados do 
                    <?php echo " ".$row["titulo"]." "?> 
                    </b></font></font></font>
                    </p>

            </td>
            <td width="143" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                    <p align="right" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Nome:</b></font></font></font></p>
            </td>
            <td width="274" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                    <p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>
                    <?php echo " ".$row["nome"]." ".$row["sobrenome"]." " ##Nome do bolsista## ?>
                    </b></font></font></font></p>
            </td>
	</tr>
        <tr>
            <td width="143" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                <p align="right" style="margin-right: 0.1cm; margin-top: 0.05cm; font-weight: normal">
                <font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">CPF:</font></font></font></p>
            </td>
            <td width="274" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                <p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                <?php echo " ".$row["CPF"]." " ## CPF do bolsista ##?>
                </font></font></font></p>
            </td>
	</tr>
	<tr>
            <td width="143" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                <p align="right" style="margin-right: 0.1cm; margin-top: 0.05cm; font-weight: normal">
                <font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">E-mail:</font></font></font></p>
            </td>
            <td width="274" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                <p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                <?php echo " ".$row["email"]." " ##Email do bolsista##?>
                </span></font></font></font></p>
            </td>
	</tr>
	<tr>
            <td width="143" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                <p align="right" style="margin-right: 0.1cm; margin-top: 0.05cm; font-weight: normal">
                <font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">Telefone:</font></font></font></p>
            </td>
            <td width="274" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                <p align="left" style="margin-top: 0.05cm"><font color="#000000">
                <font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                <?php echo " ".$row["telefone"]." " ##Telefone do bolsista ##?>
                </span></font></font></font></p>
            </td>
	</tr>
        
        
        
    <?php
            }
        }
    ?>
    
        
        
</table>
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%; page-break-before: always">
<br/>
<br/>

</p>
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>II.
A&Ccedil;&Otilde;ES SENSIBILIZA&Ccedil;&Atilde;O E PROSPEC&Ccedil;&Atilde;O</b></font></font></font></p>
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>
<table width="604" cellpadding="4" cellspacing="0" style="page-break-before: auto; page-break-after: auto">
	<col width="594">
	<tr>
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Sensibiliza&ccedil;&atilde;o</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="594" height="131" valign="top" style="background: transparent" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm">
			<font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>A&Ccedil;&Otilde;ES
			REALIZADAS: </b></font></font>
			</p>
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm">
			<font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><span style="font-weight: normal">(Qual
			sensibiliza&ccedil;&atilde;o foi realizada </span></font></font><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><span style="font-weight: normal">para
			</span></font></font><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><span style="font-weight: normal">Ampliar
			a quantidade e a qualidade das propostas apresentadas &agrave;
			incubadora?)</span></font></font></p>
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<br/>
<br/>

			</p>
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm">
			<font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><span style="font-weight: normal">#</span></font></font><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><span style="font-weight: normal">#Sensibiliza&ccedil;&otilde;es
			realizadas</span></font></font><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><span style="font-weight: normal">##</span></font></font></p>
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<br/>
<br/>

			</p>
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<br/>
<br/>

			</p>
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<br/>
<br/>

			</p>
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<br/>
<br/>

			</p>
			<p align="justify" style="margin-top: 0.05cm; font-weight: normal">
			<br/>

			</p>
		</td>
	</tr>
</table>
<table width="604" cellpadding="4" cellspacing="0" style="page-break-before: auto; page-break-after: auto">
	<col width="594">
	<tr>
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Prospec&ccedil;&atilde;o</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="594" height="150" valign="top" style="background: transparent" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm">
			<font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>A&Ccedil;&Otilde;ES
			REALIZADAS: </b></font></font>
			</p>
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<font face="Arial, sans-serif"><font size="2" style="font-size: 9pt">(Qual
			sensibiliza&ccedil;&atilde;o foi realizada?)</font></font></p>
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<br/>
<br/>

			</p>
			<ul>
				<li/>
<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
				<font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt">A
				equipe de gest&atilde;o pode buscar pesquisas, tecnologias e
				prot&oacute;tipos que tenham potencial para serem transformados
				em neg&oacute;cios de sucesso. </font></font></font>
				</p>
				<li/>
<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal; text-decoration: none">
				<font face="Arial, sans-serif"><font size="1" style="font-size: 8pt">Pelo
				lado da demanda, a equipe de gest&atilde;o pode buscar gargalos
				tecnol&oacute;gicos de empresas ou demandas da sociedade que
				possam ser atendidas por meio da gera&ccedil;&atilde;o de novos
				empreendimentos </font></font>
				</p>
			</ul>
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<br/>
<br/>

			</p>
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">##Prospec&ccedil;&otilde;es
			realizadas##</font></font></font></p>
			<p align="justify" style="margin-top: 0.05cm; font-weight: normal">
			<br/>

			</p>
		</td>
	</tr>
</table>
<table width="604" cellpadding="4" cellspacing="0" style="page-break-before: auto; page-break-after: auto">
	<col width="594">
	<tr>
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>P&uacute;blico
			Alvo</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="594" height="278" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="justify" style="font-weight: normal"><br/>
<br/>

			</p>
			<p align="justify" style="font-weight: normal"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt">Setores
			estrat&eacute;gicos para desenvolvimento da regi&atilde;o por meio
			de inova&ccedil;&atilde;o e perfil dos empreendimentos e
			empreendedores que interessam a incubadora: </font></font>
			</p>
			<p align="justify" style="font-weight: normal"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt">##
			Setores estrategico do nucleo incubador</font></font></p>
			<table width="582" cellpadding="4" cellspacing="0">
				<col width="14">
				<col width="241">
				<col width="19">
				<col width="274">
				<tr valign="top">
					<td width="14" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><br/>

						</p>
					</td>
					<td width="241" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left" style="font-style: normal; text-decoration: none">
						<font face="Liberation Serif, serif"><font size="1" style="font-size: 8pt"><b>Tecnologia
						da Informa&ccedil;&atilde;o e da Comunica&ccedil;&atilde;o
						(TIC)</b></font></font></p>
					</td>
					<td width="19" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><br/>

						</p>
					</td>
					<td width="274" style="border: 1px solid #000000; padding: 0.1cm">
						<p align="left" style="font-style: normal; text-decoration: none">
						<font face="Liberation Serif, serif"><font size="1" style="font-size: 8pt"><b>Biotecnologia
						</b></font></font>
						</p>
					</td>
				</tr>
				<tr valign="top">
					<td width="14" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><br/>

						</p>
					</td>
					<td width="241" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left" style="font-style: normal; text-decoration: none">
						<font face="Liberation Serif, serif"><font size="1" style="font-size: 8pt"><b>Automa&ccedil;&atilde;o</b></font></font></p>
					</td>
					<td width="19" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><br/>

						</p>
					</td>
					<td width="274" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="left" style="font-style: normal; text-decoration: none">
						<font face="Liberation Serif, serif"><font size="1" style="font-size: 8pt"><b>Agroneg&oacute;cio</b></font></font></p>
					</td>
				</tr>
				<tr valign="top">
					<td width="14" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><br/>

						</p>
					</td>
					<td width="241" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left" style="font-style: normal; text-decoration: none">
						<font face="Liberation Serif, serif"><font size="1" style="font-size: 8pt"><b>Eletroeletr&ocirc;nica</b></font></font></p>
					</td>
					<td width="19" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><br/>

						</p>
					</td>
					<td width="274" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="left" style="font-style: normal; text-decoration: none">
						<font face="Liberation Serif, serif"><font size="1" style="font-size: 8pt"><b>Materiais</b></font></font></p>
					</td>
				</tr>
				<tr valign="top">
					<td width="14" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><br/>

						</p>
					</td>
					<td width="241" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left" style="font-style: normal; text-decoration: none">
						<font face="Liberation Serif, serif"><font size="1" style="font-size: 8pt"><b>Nanotecnologia</b></font></font></p>
					</td>
					<td width="19" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><br/>

						</p>
					</td>
					<td width="274" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="left" style="font-style: normal; text-decoration: none">
						<font face="Liberation Serif, serif"><font size="1" style="font-size: 8pt"><b>Ecologia
						e Meio Ambiente</b></font></font></p>
					</td>
				</tr>
				<tr valign="top">
					<td width="14" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><br/>

						</p>
					</td>
					<td width="241" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left" style="font-style: normal; text-decoration: none">
						<font face="Liberation Serif, serif"><font size="1" style="font-size: 8pt"><b>Energia</b></font></font></p>
					</td>
					<td width="19" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><br/>

						</p>
					</td>
					<td width="274" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="left" style="font-style: normal; text-decoration: none">
						<font face="Liberation Serif, serif"><font size="1" style="font-size: 8pt"><b>Qu&iacute;mica</b></font></font></p>
					</td>
				</tr>
				<tr valign="top">
					<td width="14" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><br/>

						</p>
					</td>
					<td width="241" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left" style="font-style: normal; text-decoration: none">
						<font face="Liberation Serif, serif"><font size="1" style="font-size: 8pt"><b>Metalmec&acirc;nica</b></font></font></p>
					</td>
					<td width="19" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><br/>

						</p>
					</td>
					<td width="274" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="left" style="font-style: normal; text-decoration: none">
						<font face="Liberation Serif, serif"><font size="1" style="font-size: 8pt"><b>F&iacute;sica</b></font></font></p>
					</td>
				</tr>
				<tr valign="top">
					<td width="14" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><br/>

						</p>
					</td>
					<td width="241" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left" style="font-style: normal; text-decoration: none">
						<font face="Liberation Serif, serif"><font size="1" style="font-size: 8pt"><b>Inform&aacute;tica</b></font></font></p>
					</td>
					<td width="19" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><br/>

						</p>
					</td>
					<td width="274" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="left" style="font-style: normal; text-decoration: none">
						<font face="Liberation Serif, serif"><font size="1" style="font-size: 8pt"><b>Tecnologias
						Educacionais</b></font></font></p>
					</td>
				</tr>
				<tr valign="top">
					<td width="14" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><br/>

						</p>
					</td>
					<td width="241" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left" style="font-style: normal; text-decoration: none">
						<font face="Liberation Serif, serif"><font size="1" style="font-size: 8pt"><b>Tecnologia
						Assistiva</b></font></font></p>
					</td>
					<td width="19" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><br/>

						</p>
					</td>
					<td width="274" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="left" style="font-style: normal; text-decoration: none">
						<font face="Liberation Serif, serif"><font size="1" style="font-size: 8pt"><b>Outros:</b></font></font></p>
					</td>
				</tr>
			</table>
			<p align="left" style="margin-bottom: 0cm"><br/>

			</p>
			<p align="left" style="margin-bottom: 0cm"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>##</b></font></font></p>
		</td>
	</tr>
</table>
<table width="604" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="594">
	<tr style="background: transparent">
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Periodicidade
			da Sensibiliza&ccedil;&atilde;o e Prospec&ccedil;&atilde;o</b></font></font></font></p>
		</td>
	</tr>
	<tr style="background: transparent">
		<td width="594" height="142" style="background: transparent" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm">
			<font color="#000000"> <font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><span style="font-weight: normal">Durante
			o ano, quantos eventos ser&atilde;o realizados, semestral,
			trimestral?</span><span style="font-weight: normal">)</span></font></font></font></p>
			<table width="575" cellpadding="4" cellspacing="0">
				<col width="214">
				<col width="57">
				<col width="207">
				<col width="63">
				<tr valign="top">
					<td width="214" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><b>Sensibiliza&ccedil;&atilde;o</b></font></font></p>
					</td>
					<td width="57" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><b>Data</b></font></font></p>
					</td>
					<td width="207" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><b>Prospec&ccedil;&atilde;o</b></font></font></p>
					</td>
					<td width="63" style="border: 1px solid #000000; padding: 0.1cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><b>Data</b></font></font></p>
					</td>
				</tr>
				<tr valign="top">
					<td width="214" height="24" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="justify"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt">Exemplo:
						Jornada de Integra&ccedil;&atilde;o</font></font></p>
					</td>
					<td width="57" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="justify"><br/>

						</p>
					</td>
					<td width="207" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="justify"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt">Exemplo:
						Avaliar os projetos de inicia&ccedil;&atilde;o para
						aproveitamento</font></font></p>
					</td>
					<td width="63" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="justify"><br/>

						</p>
					</td>
				</tr>
				<tr valign="top">
					<td width="214" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="justify"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt">Palestra
						em escolas</font></font></p>
					</td>
					<td width="57" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="justify"><br/>

						</p>
					</td>
					<td width="207" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="justify"><br/>

						</p>
					</td>
					<td width="63" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="justify"><br/>

						</p>
					</td>
				</tr>
				<tr valign="top">
					<td width="214" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="justify"><br/>

						</p>
					</td>
					<td width="57" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="justify"><br/>

						</p>
					</td>
					<td width="207" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="justify"><br/>

						</p>
					</td>
					<td width="63" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="justify"><br/>

						</p>
					</td>
				</tr>
			</table>
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
			<br/>
<br/>

			</p>
		</td>
	</tr>
</table>
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>I</b><b>I</b><b>I.
Q</b><b>UALIFICA&Ccedil;&Atilde;O DE POTENCIAIS EMPREENDEDORES</b></font></font></font></p>
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>
<table width="604" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="594">
	<tr>
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>A&ccedil;&otilde;es
			para Qualifica&ccedil;&atilde;o dos Potenciais Empreendedores</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="594" valign="top" style="background: transparent" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt">O
			gestor precisa definir como &eacute; realizada a qualifica&ccedil;&atilde;o
			dos potenciais empreendedores para apresenta&ccedil;&atilde;o de
			propostas de empreendimentos inovadores &agrave; <b>incubadora</b>.
			</font></font></font>
			</p>
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt">Exemplos:</font></font></font></p>
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt">Cursos
			de modelos de neg&oacute;cios (Compet&ecirc;ncias empreendedoras);</font></font></font></p>
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt">Palestra
			com parceiros (Sebrae, Bandes);</font></font></font></p>
			<p align="justify" style="margin-top: 0.05cm; font-weight: normal">
			<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt">Encontros
			de Orienta&ccedil;&otilde;es;</font></font></font></p>
		</td>
	</tr>
</table>
<table width="604" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="594">
	<tr>
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000">
			</font><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Compet&ecirc;ncias
			Empreendedoras</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="594" height="199" valign="top" style="background: transparent" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" style="margin-top: 0.05cm; margin-bottom: 0.05cm; background: transparent">
			<br/>
<br/>

			</p>
			<table width="582" cellpadding="4" cellspacing="0">
				<col width="17">
				<col width="301">
				<col width="26">
				<col width="26">
				<col width="133">
				<col width="29">
				<tr>
					<td width="17" height="93" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center" style="margin-right: 0.2cm; margin-top: 0.49cm">
						<font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 9pt"><b>M&oacute;dulo/Per&iacute;odo</b></font></font></font></p>
					</td>
					<td width="301" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center" style="margin-top: 0.49cm"><font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 9pt"><b>Disciplinas</b></font></font></font></p>
					</td>
					<td width="26" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center" style="margin-left: 0.2cm; margin-right: 0.2cm; margin-top: 0.49cm">
						<font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 9pt"><b>Presencial</b></font></font></font></p>
					</td>
					<td width="26" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center" style="margin-left: 0.2cm; margin-right: 0.2cm; margin-top: 0.49cm">
						<font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 9pt"><b>A
						Distancia </b></font></font></font>
						</p>
					</td>
					<td width="133" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center" style="margin-top: 0.49cm; margin-bottom: 0.21cm"><a name="_GoBack"></a>
						<font size="2" style="font-size: 9pt"><b><font color="#000000"><font face="Arial, serif">Professo</font></font><font color="#000000"><font face="Arial, serif">r</font></font></b></font></p>
						<p align="center" style="margin-top: 0.49cm"><font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 9pt"><b>Tutor</b></font></font></font></p>
					</td>
					<td width="29" style="border: 1px solid #000000; padding: 0.1cm">
						<p align="center" style="margin-left: 0.2cm; margin-right: 0.2cm; margin-top: 0.49cm">
						<font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 9pt"><b>Carga
						Hor&aacute;ria</b></font></font></font></p>
					</td>
				</tr>
				<tr valign="top">
					<td width="17" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><br/>

						</p>
					</td>
					<td width="301" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><br/>

						</p>
						<p><br/>

						</p>
					</td>
					<td width="26" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><br/>

						</p>
					</td>
					<td width="26" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><br/>

						</p>
					</td>
					<td width="133" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><br/>

						</p>
					</td>
					<td width="29" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="center"><br/>

						</p>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<table width="604" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="594">
	<tr>
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Periodicidade
			do Processo de Sele&ccedil;&atilde;o</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="594" valign="top" style="background: transparent" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" style="margin-top: 0.05cm; font-weight: normal; background: transparent">
			<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt">Exemplo:
			Mensal, Trimestral, Semestral</font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Vagas
			Ofertadas</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="594" valign="top" style="background: transparent" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" style="margin-top: 0.05cm; font-weight: normal"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt">Quantidades
			de vagas ofertadas para a capacita&ccedil;&atilde;o (Compet&ecirc;ncias
			Empreendedoras)</font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Crit&eacute;rios
			de Avalia&ccedil;&atilde;o</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="594" valign="top" style="background: transparent" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<br/>
<br/>

			</p>
			<p align="center" style="margin-top: 0.05cm; font-weight: normal"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt">Como
			ser&aacute; avaliado o curso de compet&ecirc;ncias empreendedoras,
			valor de corte para prova ou apresenta&ccedil;&atilde;o&hellip;.</font></font></font></p>
		</td>
	</tr>
</table>
<table width="604" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="594">
	<tr>
		<td width="594" height="17" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Propostas
			Recebidas/Propostas Selecionadas</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="594" height="78" valign="top" style="background: transparent" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" style="margin-top: 0.05cm; margin-bottom: 0.05cm">
			<br/>
<br/>

			</p>
			<table width="578" cellpadding="4" cellspacing="0">
				<col width="278">
				<col width="282">
				<tr valign="top">
					<td width="278" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>N&ordm;
						Projetos/Propostas Recebidas</b></font></font></p>
					</td>
					<td width="282" style="border: 1px solid #000000; padding: 0.1cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>N&ordm;
						Projetos/Propostas Selecionadas (Qualificadas)</b></font></font></p>
					</td>
				</tr>
				<tr valign="top">
					<td width="278" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><br/>

						</p>
						<p align="center"><br/>

						</p>
					</td>
					<td width="282" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="center"><br/>

						</p>
					</td>
				</tr>
			</table>
			<p align="center" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
			<br/>
<br/>

			</p>
		</td>
	</tr>
</table>
<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>
<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>IV.
AVALIA&Ccedil;&Atilde;O DA EFETIVIDADE E DAS A&Ccedil;&Otilde;ES DE
QUALIFICA&Ccedil;&Atilde;O DE POTENCIAIS EMPREENDEDORES REALIZADAS</b></font></font></font></p>
<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>
<table width="604" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="594">
	<tr>
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>M&eacute;tricas</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="594" height="161" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt">Definir
			as m&eacute;tricas e/ou Indicadores para verificar se a
			sensibiliza&ccedil;&atilde;o ou prospec&ccedil;&atilde;o est&aacute;
			gerando os resultados esperados:</font></font></font></p>
			<table width="578" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
				<col width="226">
				<col width="83">
				<col width="165">
				<col width="71">
				<tr style="background: transparent">
					<td width="226" height="25" style="background: transparent" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><b>A&ccedil;&atilde;o
						Realizada</b></font></font></p>
					</td>
					<td width="83" valign="top" style="background: transparent" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><b>N&ordm;
						de Participantes</b></font></font></p>
					</td>
					<td width="165" valign="top" style="background: transparent" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><b>Compet&ecirc;ncias
						Empreendedoras</b></font></font></p>
					</td>
					<td width="71" valign="top" style="background: transparent" style="border: 1px solid #000000; padding: 0.1cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><b>N&ordm;
						de Inscritos </b></font></font>
						</p>
					</td>
				</tr>
				<tr>
					<td width="226" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><font face="Arial, serif"><font size="2" style="font-size: 9pt">Exemplo:
						Palestra Sebrae</font></font></p>
						<p align="left"><br/>

						</p>
					</td>
					<td width="83" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><br/>

						</p>
					</td>
					<td width="165" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><font face="Arial, serif"><font size="2" style="font-size: 9pt">Curso
						EAD</font></font></p>
					</td>
					<td width="71" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="left"><br/>

						</p>
					</td>
				</tr>
				<tr>
					<td width="226" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><font face="Arial, serif"><font size="2" style="font-size: 9pt">Exemplo:
						Participa&ccedil;&atilde;o da Jornada de Integra&ccedil;&atilde;o</font></font></p>
					</td>
					<td width="83" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><br/>

						</p>
					</td>
					<td width="165" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><font face="Arial, serif"><font size="2" style="font-size: 9pt">Aulas
						Presenciais</font></font></p>
					</td>
					<td width="71" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="left"><br/>

						</p>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<table width="605" cellpadding="4" cellspacing="0" style="page-break-before: auto; page-break-after: auto">
	<col width="595">
	<tr>
		<td width="595" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Efic&aacute;cia
			e Efici&ecirc;ncia das A&ccedil;&otilde;es Realizadas</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="595" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm">
			<font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 10pt"><b>EFIC&Aacute;CIA
			DAS A&Ccedil;&Otilde;ES:</b></font></font></font></p>
			<p align="left" style="margin-bottom: 0cm"><font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 9pt">(Compara&ccedil;&atilde;o
			entre o que se pretendia fazer e o que efetivamente se conseguiu) </font></font></font>
			</p>
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<br/>
<br/>

			</p>
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<br/>
<br/>

			</p>
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm">
			<font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 10pt"><b>EFICI&Ecirc;NCIA
			DAS A&Ccedil;&Otilde;ES:</b></font></font></font></p>
			<p align="left" style="margin-bottom: 0cm"><font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 9pt">(Rela&ccedil;&atilde;o
			entre os resultados que se conseguiu alcan&ccedil;ar e os recursos
			empregados, recursos alcan&ccedil;ados/recursos utilizados)</font></font></font></p>
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<br/>
<br/>

			</p>
			<p align="justify" style="margin-top: 0.05cm; font-weight: normal">
			<br/>

			</p>
		</td>
	</tr>
</table>
<table width="605" cellpadding="4" cellspacing="0" style="page-break-before: auto; page-break-after: auto">
	<col width="595">
	<tr>
		<td width="595" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Necessidade
			de Mudan&ccedil;a nas A&ccedil;&otilde;es </b></font></font></font>
			</p>
		</td>
	</tr>
	<tr>
		<td width="595" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm">
			<br/>
<br/>

			</p>
			<p align="justify" style="margin-top: 0.05cm"><br/>

			</p>
		</td>
	</tr>
</table>
<table width="605" cellpadding="4" cellspacing="0" style="page-break-before: auto; page-break-after: auto">
	<col width="595">
	<tr>
		<td width="595" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Quais
			A&ccedil;&otilde;es Necess&aacute;rias para Viabilizar as A&ccedil;&otilde;es
			de Mudan&ccedil;a </b></font></font></font>
			</p>
		</td>
	</tr>
	<tr>
		<td width="595" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<br/>
<br/>

			</p>
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<br/>
<br/>

			</p>
			<p align="justify" style="margin-top: 0.05cm; font-weight: normal">
			<br/>

			</p>
		</td>
	</tr>
</table>
<p style="margin-bottom: 0cm; page-break-before: auto; page-break-after: auto">
<br/>

</p>
<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>V.
REGISTRO DAS A&Ccedil;&Otilde;ES E LI&Ccedil;&Otilde;ES APRENDIDAS</b></font></font></font></p>
<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal; line-height: 100%">
<br/>
<br/>

</p>
<table width="605" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="595">
	<tr style="background: transparent">
		<td width="595" height="20" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm; page-break-before: auto; page-break-after: auto">
			<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Registro
			das A&ccedil;&otilde;es, Resultados e Avalia&ccedil;&otilde;es da
			Efetividade das A&ccedil;&otilde;es</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="595" height="143" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="left" style="margin-left: 0.4cm; margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal; background: transparent">
			<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">Descrever
			abaixo quais s&atilde;o os anexos deste relat&oacute;rio de
			gest&atilde;o. Caso seja necess&aacute;rio, insira mais linhas na
			tabela abaixo.</font></font></font></p>
			<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<br/>
<br/>

			</p>
			<table width="572" cellpadding="4" cellspacing="0">
				<col width="146">
				<col width="408">
				<tr valign="top">
					<td width="146" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>N&uacute;mero
						do Anexo</b></font></font></font></p>
					</td>
					<td width="408" style="border: 1px solid #000000; padding: 0.1cm">
						<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Descri&ccedil;&atilde;o
						do Anexo</b></font></font></font></p>
					</td>
				</tr>
				<tr valign="top">
					<td width="146" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">001</font></font></font></p>
					</td>
					<td width="408" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">Exemplo:
						Lista de presen&ccedil;a</font></font></font></p>
					</td>
				</tr>
				<tr valign="top">
					<td width="146" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">002</font></font></font></p>
					</td>
					<td width="408" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">Exemplo:
						Lista de inscritos na capacita&ccedil;&atilde;o</font></font></font></p>
					</td>
				</tr>
				<tr valign="top">
					<td width="146" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">003</font></font></font></p>
					</td>
					<td width="408" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">Exemplo:
						Relat&oacute;rio Fotogr&aacute;fico</font></font></font></p>
					</td>
				</tr>
				<tr valign="top">
					<td width="146" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">004</font></font></font></p>
					</td>
					<td width="408" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">Exemplo:
						Avalia&ccedil;&atilde;o dos Empreendimentos</font></font></font></p>
					</td>
				</tr>
			</table>
			<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal; line-height: 100%">
			<br/>
<br/>

			</p>
		</td>
	</tr>
	<tr style="background: transparent">
		<td width="595" height="26" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
			<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Li&ccedil;&otilde;es
			Aprendidas</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="595" height="36" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal; line-height: 100%">
			<br/>
<br/>

			</p>
			<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal; line-height: 100%">
			<br/>
<br/>

			</p>
			<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal; line-height: 100%">
			<br/>
<br/>

			</p>
			<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal; line-height: 100%">
			<br/>
<br/>

			</p>
		</td>
	</tr>
</table>
<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>
</body>
</html>