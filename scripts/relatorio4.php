<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1252"/>
	<title>Manual de Implanta&ccedil;&atilde;o Cerne 2018</title>
	<meta name="generator" content="LibreOffice 6.0.5.2 (Windows)"/>
	<meta name="author" content="Luciano Valente"/>
	<meta name="created" content="2018-09-25T17:22:00"/>
	<meta name="changed" content="2019-05-20T16:46:11.986000000"/>
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
	<img src="4-Relat%C3%B3rio_html_dde9ce1185cf5989.png" name="Figura3" align="left" width="167" height="49">
  <br clear="left"/>
</img>
<br/>
<br/>

	</p>
</div>
<p align="center" style="margin-bottom: 0cm; orphans: 2; widows: 2"><img src="4-Relat%C3%B3rio_html_dde9ce1185cf5989.png" name="Figura1" align="left" width="308" height="90">
  <br clear="left"/>
</img>
<br/>

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
<p align="center"><font color="#000000"><font face="Arial, sans-serif"><font size="4" style="font-size: 14pt"><b>R</b></font></font><font face="Arial, sans-serif"><font size="4" style="font-size: 14pt"><b>ELAT&Oacute;RIO
DE </b></font></font><font face="Arial, sans-serif"><font size="4" style="font-size: 14pt"><b>P&Oacute;S
- INCUBA&Ccedil;&Atilde;O <!-- Não esquece de por a consulta por data no php (SQL já tem)
Wag precisa ver o UTF-8 --></b></font></font></font></p>
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>I.
ATUALIZA&Ccedil;&Atilde;O CADASTRAL DOS EMPREENDIMENTOS</b></font></font></font></p>
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>


<?php
    $entidade = 'Itapina';
    $entidadeId = 10; /*ID do campus de Itapina*/
    $dataIni = '2019-05-01';
    $dataFim = '2019-06-31';
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "glpi";
?>

<?php
    $empreendedor = bufferRelatorio_Empreendedor(); //criando a matriz do select
    $final = bufferRelatorio_Final();
    $matrizEachEmp = matrizEachEmpreendedor($empreendedor);
    
    $count = 0;
    for($count=0;$count < sizeof($matrizEachEmp);$count++){
    
?>

    <table width="604" cellpadding="0" cellspacing="0">
            <col width="25">
            <col width="114">
            <col width="125">
            <col width="339">
            <tr>
                    <td rowspan="10" width="25" height="24" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>
                                <?php echo $count+1; ?>
                                            </b></font></font></font></p>
                    </td>
                    <td width="114" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Nome
                            do Empreendimento:<!-- Se graduada = empreendimento aqui deveria ser Graduada, correto? --></b></font></font></font></p>
                    </td>
                    <td colspan="2" width="463" valign="top" style="border: 1px solid #000000; padding: 0cm">
                            <p align="center" style="margin-top: 0.15cm"><font color="#000000"><font face="Arial, sans-serif"><font size="3" style="font-size: 12pt"><b>
                                        <?php findAnswer(553,$matrizEachEmp[$count]);?>
                                            </b></font></font></font></p>
                    </td>
            </tr>
            <tr>
                    <td rowspan="9" width="114" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Informa&ccedil;&otilde;es
                            Cadastrais</b><span style="font-weight: normal">:</span></font></font></font></p>
                    </td>
                    <td width="125" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Respons&aacute;veis:</b></font></font></font></p>
                    </td>
                    <td width="339" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                            <p style="margin-top: 0.05cm"><font color="#000000">
                            <font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>
                                        <?php findAnswer(552,$matrizEachEmp[$count]);?>
                                    </b></font></font></font></p>
                    </td>
            </tr>
            <tr>
                    <td width="125" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>CNPJ:</b></font></font></font></p>
                    </td>
                    <td width="339" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                            <p style="margin-top: 0.1cm; font-variant: normal; font-weight: normal">
                            <font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 10pt">
                                        <?php findAnswer(554,$matrizEachEmp[$count]);?>
                                    </font></font></font></p>
                    </td>
            </tr>
            <tr>
                    <td width="125" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Endere&ccedil;o:</b></font></font></font></p>
                    </td>
                    <td width="339" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                            <p style="margin-top: 0.1cm; font-variant: normal; font-weight: normal">
                            <font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 10pt">
                                        <?php findAnswer(555,$matrizEachEmp[$count]);?>
                                    </font></font></font></p>
                    </td>
            </tr>
            <tr>
                    <td width="125" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Possui
                            sede Pr&oacute;pria:</b></font></font></font></p>
                    </td>
                    <td width="339" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                            <p style="margin-top: 0.1cm; font-variant: normal; font-weight: normal">
                            <font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 10pt">
                                        <?php findAnswer(664,$matrizEachEmp[$count]);?>
                                    </font></font></font></p>
                    </td>
            </tr>
            <tr>
                    <td width="125" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Telefone:</b></font></font></font></p>
                    </td>
                    <td width="339" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                            <p style="margin-top: 0.1cm; font-variant: normal; font-weight: normal">
                            <font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 10pt">
                                        <?php findAnswer(556,$matrizEachEmp[$count]);?>
                                    </font></font></font></p>
                    </td>
            </tr>
            <tr>
                    <td width="125" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>E-mail:</b></font></font></font></p>
                    </td>
                    <td width="339" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                            <p style="margin-top: 0.1cm; font-variant: normal; font-weight: normal">
                            <font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 10pt">
                                        <?php findAnswer(557,$matrizEachEmp[$count]);?>
                                    </font></font></font></p>
                    </td>
            </tr>
            <tr>
                    <td width="125" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm; font-weight: normal">
                            <font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt">Site:</font></font></font></p>
                    </td>
                    <td width="339" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                            <p style="margin-top: 0.1cm; font-variant: normal; font-weight: normal">
                            <font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 10pt">
                                        <?php findAnswer(665,$matrizEachEmp[$count]);?>
                                    </font></font></font></p>
                    </td>
            </tr>
            <tr>
                    <td width="125" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm; font-weight: normal">
                            <font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt">Data
                            da Avalia&ccedil;&atilde;o:</font></font></font></p>
                    </td>
                    <td width="339" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                            <p style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><span style="font-variant: normal"><font face="Arial, serif"><span lang="pt-BR"><span style="font-weight: normal">
                                        <?php findAnswer(558,$matrizEachEmp[$count]);?>
                                        </span></span></font></span><b>
                            </b></font></font></font>
                            </p>
                    </td>
            </tr>
            <tr>
                    <td width="125" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>N&ordm;
                            Termo de Coopera&ccedil;&atilde;o e Parceria:</b></font></font></font></p>
                    </td>
                    <td width="339" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                            <p style="margin-top: 0.1cm; font-variant: normal; font-weight: normal">
                            <font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 10pt">
                                        <?php findAnswer(560,$matrizEachEmp[$count]);?>
                                    </font></font></font></p>
                    </td>
            </tr>
    </table>
<?php
    }
?>
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>II.
SELO DE CERTIFICA&Ccedil;&Atilde;O</b></font></font></font></p>
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>
<table width="604" cellpadding="4" cellspacing="0" style="page-break-before: auto; page-break-after: auto">
	<col width="594">
	<tr>
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>SELO
			DE CERTIFICA&Ccedil;&Atilde;O E RECERTIFICA&Ccedil;&Atilde;O</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="594" height="127" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<table width="597" cellpadding="4" cellspacing="0">
				<col width="157">
				<col width="117">
				<col width="98">
				<col width="98">
				<col width="85">
				<tr>
					<td width="157" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Nome
						do Empreendimento</b></font></font></p>
					</td>
					<td width="117" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Tipo
						de Selo</b></font></font></p>
					</td>
					<td width="98" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>N&uacute;mero
						do Selo</b></font></font></p>
					</td>
					<td width="98" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Data
						da Certifica&ccedil;&atilde;o</b></font></font></p>
					</td>
					<td width="85" style="border: 1px solid #000000; padding: 0.1cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Data
						da Recertifica&ccedil;&atilde;o</b></font></font></p>
					</td>
				</tr>
                                
                            <?php
                                for($count=0;$count<sizeof($matrizEachEmp);$count++){
                            ?>
                                
				<tr valign="top">
					<td width="157" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                                            <?php findAnswer(553,$matrizEachEmp[$count]);?>
                                                        </font></font></p>
					</td>
					<td width="117" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                                            <?php findAnswer(666,$matrizEachEmp[$count]);?>
                                                        </font></font></p>
					</td>
					<td width="98" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                                            <?php findAnswer(600,$matrizEachEmp[$count]);?>
                                                        </font></font></p>
					</td>
					<td width="98" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                                            <?php findAnswer(601,$matrizEachEmp[$count]);?>
                                                        </font></font></p>
					</td>
					<td width="85" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                                            <?php findAnswer(561,$matrizEachEmp[$count]);?>
                                                        </font></font></p>
					</td>
				</tr>
                            <?php
                                }
                            ?>
			</table>
			
		</td>
	</tr>
</table>
<p style="margin-bottom: 0cm; page-break-before: auto; page-break-after: auto">
<br/>

</p>
<p><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>III.
INFORMA&Ccedil;&Otilde;ES DAS GRADUADAS</b></font></font></font></p>
<p style="margin-bottom: 0cm"><br/>

</p>
<table width="604" cellpadding="4" cellspacing="0" style="background: transparent; page-break-inside: auto">
	<col width="594">
	<tr style="background: transparent">
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Descri&ccedil;&atilde;o
			dos Clientes dos Empreendimentos</b></font></font></font></p>
		</td>
	</tr>
	<tr style="background: transparent">
		<td width="594" height="119" style="background: transparent" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<table width="582" cellpadding="4" cellspacing="0">
				<col width="86">
				<col width="132">
				<col width="139">
				<col width="191">
				<tr>
					<td width="86" valign="top" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Nome
						da Graduada</b></font></font></p>
					</td>
					<td width="132" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Capta&ccedil;&atilde;o
						de Clientes por proje&ccedil;&atilde;o</b></font></font></p>
					</td>
					<td width="139" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Localiza&ccedil;&atilde;o
						dos Clientes</b></font></font></p>
					</td>
					<td width="191" style="border: 1px solid #000000; padding: 0.1cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Montante
						m&eacute;dio de vendas por proje&ccedil;&atilde;o</b></font></font></p>
					</td>
				</tr>
                            
                            <?php
                                for($count=0;$count<sizeof($matrizEachEmp);$count++){
                            ?>
				<tr valign="top">
					<td width="86" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt">
                                                            <?php findAnswer(553,$matrizEachEmp[$count]);?>
                                                        </font></font></p>
					</td>
					<td width="132" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                                            <?php findAnswer(562,$matrizEachEmp[$count]);?>
                                                        </font></font></p>
					</td>
					<td width="139" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                                            <?php findAnswer(563,$matrizEachEmp[$count]);?>
                                                        </font></font></p>
					</td>
					<td width="191" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                                            <?php findAnswer(564,$matrizEachEmp[$count]);?>
                                                        </font><!-- Graduada = empreendimento? --></font></p>
					</td>
				</tr>
                            <?php
                                }
                            ?>
			</table>
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
			<br/>
<br/>

			</p>
		</td>
	</tr>
</table>
<table width="604" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="594">
	<tr style="background: transparent">
		<td width="594" height="16" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Dados
			dos Empreendimentos</b></font></font></font></p>
		</td>
	</tr>
</table>
<table width="604" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="594">
	<tr style="background: transparent">
		<td width="594" height="190" style="background: transparent" style="border: 1px solid #000000; padding: 0.1cm">
			<p><br/>
<br/>

			</p>
			<table width="577" cellpadding="4" cellspacing="0">
				<col width="142">
				<col width="136">
				<col width="132">
				<col width="133">
				<tr>
					<td rowspan="2" width="142" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><b>Indicadores</b></font></font></p>
					</td>
					<td colspan="3" width="417" style="border: 1px solid #000000; padding: 0.1cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>EMPRESAS
						GRADUADAS</b></font></font></p>
					</td>
				</tr>
				<tr>
                                    <?php
                                        for($count=0;$count<sizeof($matrizEachEmp);$count++){
                                    ?>
					<td width="136" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"> <font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>
                                                                <?php findAnswer(553,$matrizEachEmp[$count]);?>
                                                            </b></font></font></p>
					</td>
                                    <?php
                                        }
                                    ?>
				</tr>
				<tr valign="top">
					<td width="142" height="15" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Investimento
						Inicial</b></font></font></p>
					</td>
                                    <?php
                                        for($count=0;$count<sizeof($matrizEachEmp);$count++){
                                    ?>
					<td width="136" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"> <font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>
                                                                <?php findAnswer(583,$matrizEachEmp[$count]);?>
                                                            </b></font></font></p>
					</td>
                                    <?php
                                        }
                                    ?>
					
				</tr>
				<tr valign="top">
					<td width="142" height="15" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Receita
						Operacional</b></font></font></p>
					</td>
                                    <?php
                                        for($count=0;$count<sizeof($matrizEachEmp);$count++){
                                    ?>
					<td width="136" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"> <font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>
                                                                <?php findAnswer(585,$matrizEachEmp[$count]);?>
                                                            </b></font></font></p>
					</td>
                                    <?php
                                        }
                                    ?>
				</tr>
				<tr valign="top">
					<td width="142" height="15" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Despesas
						Operacionais</b></font></font></p>
					</td>
					<?php
                                        for($count=0;$count<sizeof($matrizEachEmp);$count++){
                                    ?>
					<td width="136" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"> <font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>
                                                                <?php findAnswer(581,$matrizEachEmp[$count]);?>
                                                            </b></font></font></p>
					</td>
                                    <?php
                                        }
                                    ?>
				</tr>
				<tr valign="top">
					<td width="142" height="15" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Despesas
						N&atilde;o Desembols&aacute;veis</b></font></font></p>
					</td>
					<?php
                                        for($count=0;$count<sizeof($matrizEachEmp);$count++){
                                    ?>
					<td width="136" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"> <font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>
                                                                <?php findAnswer(586,$matrizEachEmp[$count]);?>
                                                            </b></font></font></p>
					</td>
                                    <?php
                                        }
                                    ?>
				</tr>
				<tr valign="top">
					<td width="142" height="15" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Lucro
						antes do IR</b></font></font></p>
					</td>
                                    <?php
                                        for($count=0;$count<sizeof($matrizEachEmp);$count++){
                                    ?>
					<td width="136" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"> <font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>
                                                                <?php findAnswer(587,$matrizEachEmp[$count]);?>
                                                            </b></font></font></p>
					</td>
                                    <?php
                                        }
                                    ?>
				</tr>
				<tr valign="top">
					<td width="142" height="15" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Deprecia&ccedil;&atilde;o</b></font></font></p>
					</td>
					<?php
                                        for($count=0;$count<sizeof($matrizEachEmp);$count++){
                                    ?>
					<td width="136" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"> <font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>
                                                                <?php findAnswer(588,$matrizEachEmp[$count]);?>
                                                            </b></font></font></p>
					</td>
                                    <?php
                                        }
                                    ?>
				</tr>
				<tr valign="top">
					<td width="142" height="15" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>IR
						(%)</b></font></font></p>
					</td>
					<?php
                                        for($count=0;$count<sizeof($matrizEachEmp);$count++){
                                    ?>
					<td width="136" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"> <font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>
                                                                <?php findAnswer(589,$matrizEachEmp[$count]);?>
                                                            </b></font></font></p>
					</td>
                                    <?php
                                        }
                                    ?>
				</tr>
				<tr valign="top">
					<td width="142" height="15" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Lucro
						L&iacute;quido</b></font></font></p>
					</td>
					<?php
                                        for($count=0;$count<sizeof($matrizEachEmp);$count++){
                                    ?>
					<td width="136" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"> <font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>
                                                                <?php findAnswer(582,$matrizEachEmp[$count]);?>
                                                            </b></font></font></p>
					</td>
                                    <?php
                                        }
                                    ?>
				</tr>
				<tr valign="top">
					<td width="142" height="11" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Payback</b></font></font></p>
					</td>
					<?php
                                        for($count=0;$count<sizeof($matrizEachEmp);$count++){
                                    ?>
					<td width="136" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"> <font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>
                                                                <?php findAnswer(590,$matrizEachEmp[$count]);?>
                                                            </b></font></font></p>
					</td>
                                    <?php
                                        }
                                    ?>
				</tr>
				<tr valign="top">
					<td width="142" height="11" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Valor
						Presente L&iacute;quido (VPL)</b></font></font></p>
					</td>
					<?php
                                        for($count=0;$count<sizeof($matrizEachEmp);$count++){
                                    ?>
					<td width="136" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"> <font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>
                                                                <?php findAnswer(591,$matrizEachEmp[$count]);?>
                                                            </b></font></font></p>
					</td>
                                    <?php
                                        }
                                    ?>
				</tr>
				<tr valign="top">
					<td width="142" height="14" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Taxa
						Interna de Retorno (TIR)</b></font></font></p>
					</td>
					<?php
                                        for($count=0;$count<sizeof($matrizEachEmp);$count++){
                                    ?>
					<td width="136" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"> <font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>
                                                                <?php findAnswer(592,$matrizEachEmp[$count]);?>
                                                            </b></font></font></p>
					</td>
                                    <?php
                                        }
                                    ?>
				</tr>
				<tr valign="top">
					<td width="142" height="15" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Tempo
						de Retorno (Capital Pr&oacute;prio)</b></font></font></p>
					</td>
					<?php
                                        for($count=0;$count<sizeof($matrizEachEmp);$count++){
                                    ?>
					<td width="136" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"> <font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>
                                                                <?php findAnswer(593,$matrizEachEmp[$count]);?>
                                                            </b></font></font></p>
					</td>
                                    <?php
                                        }
                                    ?>
				</tr>
				<tr valign="top">
					<td width="142" height="16" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>&Iacute;ndice
						de Lucratividade (IL)</b></font></font></p>
					</td>
					<?php
                                        for($count=0;$count<sizeof($matrizEachEmp);$count++){
                                    ?>
					<td width="136" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"> <font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>
                                                                <?php findAnswer(594,$matrizEachEmp[$count]);?>
                                                            </b></font></font></p>
					</td>
                                    <?php
                                        }
                                    ?>
				</tr>
			</table>
			<p><br/>
<br/>

			</p>
		</td>
	</tr>
</table>
<table width="605" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="135">
	<col width="75">
	<col width="91">
	<col width="75">
	<col width="75">
	<col width="54">
	<col width="43">
	<tr style="background: transparent">
		<td colspan="7" width="595" height="17" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Quadro
			de Funcion&aacute;rios</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="135" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Empresas
			Graduadas</b></font></font></p>
		</td>
		<td width="75" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>N&uacute;mero
			total de funcion&aacute;rio</b></font></font></p>
		</td>
		<td width="91" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>N&ordm;
			de Funcion&aacute;rios CLT</b></font></font></p>
		</td>
		<td width="75" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>N&ordm;
			Funcion&aacute;rios Tempor&aacute;rios</b></font></font></p>
		</td>
		<td width="75" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>N&ordm;
			Estagi&aacute;rios (Ifes)</b></font></font></p>
		</td>
		<td width="54" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>N&ordm;
			Bolsista (Ifes)</b></font></font></p>
		</td>
		<td width="43" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>N&ordm;
			Menor Aprendiz</b></font></font></p>
		</td>
	</tr>
    <?php
        for($count=0;$count<sizeof($matrizEachEmp);$count++){
    ?>

	<tr valign="top">
		<td width="135" height="23" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                    <?php findAnswer(553,$matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
		<td width="75" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                    <?php findAnswer(667,$matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
		<td width="91" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                    <?php findAnswer(569,$matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
		<td width="75" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                    <?php findAnswer(570,$matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
		<td width="75" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                    <?php findAnswer(571,$matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
                
		<td width="54" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                    <?php findAnswer(572,$matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
		<td width="43" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                    <?php findAnswer(573,$matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
	</tr>
    <?php
        }
    ?>

</table>
<table width="605" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="131">
	<col width="37">
	<col width="37">
	<col width="67">
	<col width="52">
	<col width="87">
	<col width="57">
	<col width="70">
	<tr style="background: transparent">
		<td colspan="8" width="595" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0.1cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Propriedade</b>
			<b>Intelectual</b></font></font></p>
		</td>
	</tr>
	<tr>
		<td rowspan="2" width="131" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt">Nomes
			dos Empreendedores</font></font></p>
		</td>
		<td colspan="6" width="377" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" style="font-weight: normal"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt">Quantidades</font></font></p>
		</td>
		<td rowspan="2" width="70" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><span style="font-weight: normal">Apoio
			do IFES (sim/n&atilde;o)</span></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="37" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" style="font-weight: normal"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt">Marca</font></font></p>
		</td>
		<td width="37" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" style="font-weight: normal"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt">Patente</font></font></p>
		</td>
		<td width="67" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" style="font-weight: normal"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt">Programa
			de Computador</font></font></p>
		</td>
		<td width="52" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" style="font-weight: normal"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt">Desenho
			Industrial</font></font></p>
		</td>
		<td width="87" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" style="font-weight: normal"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt">Topografia
			de Circuito Integrado</font></font></p>
		</td>
		<td width="57" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" style="font-weight: normal"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt">Identidade
			Geogr&aacute;fica</font></font></p>
		</td>
	</tr>
        
<?php
    for($count=0;$count<sizeof($matrizEachEmp);$count++){
?>
	<tr>
		<td width="131" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                                    <?php findAnswer(553, $matrizEachEmp[$count]);?>
                                </font></p>
		</td>
		<td width="37" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                                    <?php findAnswer(668, $matrizEachEmp[$count]);?> 
                                </font></p>
		</td>
		<td width="37" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                                    <?php findAnswer(669, $matrizEachEmp[$count]);?> 
                                </font></p>
		</td>
		<td width="67" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                                    <?php findAnswer(670, $matrizEachEmp[$count]);?> 
                                </font></p>
		</td>
		<td width="52" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                                    <?php findAnswer(671, $matrizEachEmp[$count]);?> 
                                </font></p>
		</td>
		<td width="87" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                                    <?php findAnswer(672, $matrizEachEmp[$count]);?> 
                                </font></p>
		</td>
		<td width="57" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                                    <?php findAnswer(673, $matrizEachEmp[$count]);?> 
                                </font></p>
		</td>
		<td width="70" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                                    <?php findAnswer(577, $matrizEachEmp[$count]);?> 
                                </font></p>
		</td>
	</tr>
<?php
    }
?>  

</table>
<table width="605" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="165">
	<col width="98">
	<col width="78">
	<col width="83">
	<col width="138">
	<tr style="background: transparent">
		<td colspan="5" width="595" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0.1cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Financiamento</b></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="165" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Empresas
			Graduadas</b></font></font></p>
		</td>
		<td width="98" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Capital
			de Pr&oacute;prio</b></font></font></p>
		</td>
		<td width="78" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Capital
			de Terceiros</b></font></font></p>
		</td>
		<td width="83" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" style="font-style: normal; text-decoration: none">
			<font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Custo
			do Capital pr&oacute;prio (anual)</b></font></font></font></p>
		</td>
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" style="font-style: normal; text-decoration: none">
			<font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Custo
			do Capital de terceiros (anual)</b></font></font></font></p>
		</td>
	</tr>
    <?php
        for($count=0;$count<sizeof($matrizEachEmp);$count++){
    ?>
	<tr valign="top">
		<td width="165" height="24" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                    <?php findAnswer(553, $matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
		<td width="98" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                    <?php findAnswer(683, $matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
		<td width="78" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                    <?php findAnswer(684, $matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
		<td width="83" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                    <?php findAnswer(685, $matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                    <?php findAnswer(686, $matrizEachEmp[$count]);?>
                                    <!-- Por graduada? (ou empreendedor, to considerando a msm coisa) --></font></font></p>
		</td>
	</tr>
    <?php
        }
    ?>
</table>
<table width="605" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="138">
	<col width="87">
	<col width="83">
	<col width="75">
	<col width="86">
	<col width="86">
	<tr style="background: transparent">
		<td colspan="6" width="595" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0.1cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Fornecedores</b></font></font></p>
		</td>
	</tr>
	<tr style="background: transparent">
		<td width="138" height="25" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Empresas
			Graduadas</b></font></font></p>
		</td>
		<td width="83" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Municipal</b></font></font></p>
		</td>
		<td width="83" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Estadual</b></font></font></p>
		</td>
		<td width="75" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Regional</b></font></font></p>
		</td>
		<td width="86" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" style="font-style: normal; text-decoration: none">
			<font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Nacional</b></font></font></font></p>
		</td>
		<td width="86" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Internacional</b></font></font></p>
		</td>
	</tr>
    <?php
        for($count=0;$count<sizeof($matrizEachEmp);$count++){
    ?>
	<tr>
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">
                                    <?php findAnswer(553, $matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
		<td width="87" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">
                                    <?php findAnswer(599, $matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
		<td width="87" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">
                                    <?php findAnswer(598, $matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
		<td width="87" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">
                                    <?php findAnswer(597, $matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
		<td width="87" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">
                                    <?php findAnswer(596, $matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
		<td width="87" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">
                                    <?php findAnswer(674, $matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
    <?php
        }
    ?>
	</tr>
</table>
<table width="605" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="138">
	<col width="87">
	<col width="83">
	<col width="75">
	<col width="86">
	<col width="86">
	<tr style="background: transparent">
		<td colspan="6" width="595" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0.1cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Produto
			ou Servi&ccedil;o</b></font></font></p>
		</td>
	</tr>
	<tr style="background: transparent">
		<td width="138" height="25" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Empresas
			Graduadas</b></font></font></p>
		</td>
		<td width="83" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Municipal</b></font></font></p>
		</td>
		<td width="83" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Estadual</b></font></font></p>
		</td>
		<td width="75" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Regional</b></font></font></p>
		</td>
		<td width="86" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" style="font-style: normal; text-decoration: none">
			<font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Nacional</b></font></font></font></p>
		</td>
		<td width="86" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Internacional</b></font></font></p>
		</td>
	</tr>
    <?php
        for($count=0;$count<sizeof($matrizEachEmp);$count++){
    ?>
	<tr>
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">
                                    <?php findAnswer(553, $matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
		<td width="87" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">
                                    <?php findAnswer(690, $matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
		<td width="87" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">
                                    <?php findAnswer(691, $matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
		<td width="87" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">
                                    <?php findAnswer(692, $matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
		<td width="87" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">
                                    <?php findAnswer(693, $matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
		<td width="87" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">
                                    <?php findAnswer(694, $matrizEachEmp[$count]);?>
                                </font></font></p>
		</td>
    <?php
        }
    ?>
	</tr>
</table>
<table width="605" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="138">
	<col width="87">
	<col width="83">
	<col width="75">
	<col width="87">
	<col width="86">
	<tr style="background: transparent">
		<td colspan="6" width="595" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0.1cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b><span style="background: transparent">Avalia&ccedil;&atilde;o
			de Mercado e Informa&ccedil;&otilde;es Adicionais</span></b></font></font></p>
		</td>
	</tr>
	<tr>
		<td rowspan="2" width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b><span style="background: transparent">Indicadores</span></b></font></font></p>
		</td>
		<td colspan="5" width="448" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b><span style="background: transparent">Empresas
			Graduadas</span></b></font></font></p>
		</td>
	</tr>
	<tr>
            <?php
                for($count=0;$count<sizeof($matrizEachEmp);$count++){
            ?>
		<td width="87" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><span style="background: transparent">
                                        <?php findAnswer(553, $matrizEachEmp[$count]);?>
                                    </span></font></font></p>
		</td>
            <?php
                }
            ?>
	</tr>
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><span style="background: transparent">Quanto
			tempo de mercado</span></font></font></p>
		</td>
            <?php
                for($count=0;$count<sizeof($matrizEachEmp);$count++){
            ?>
		<td width="87" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><span style="background: transparent">
                                        <?php findAnswer(675, $matrizEachEmp[$count]);?>
                                    </span></font></font></p>
		</td>
            <?php
                }
            ?>
	</tr>
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><span style="background: transparent">Percentual
			de crescimento</span></font></font></p>
		</td>
            <?php
                for($count=0;$count<sizeof($matrizEachEmp);$count++){
            ?>
		<td width="87" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><span style="background: transparent">
                                        <?php findAnswer(676, $matrizEachEmp[$count]);?>
                                    </span></font></font></p>
		</td>
            <?php
                }
            ?>	
        </tr>
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><span style="background: transparent">N&uacute;mero
			de emprego por per&iacute;odo</span></font></font></p>
		</td>
            <?php
                for($count=0;$count<sizeof($matrizEachEmp);$count++){
            ?>
		<td width="87" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><span style="background: transparent">
                                        <?php findAnswer(677, $matrizEachEmp[$count]);?>
                                    </span></font></font></p>
		</td>
            <?php
                }
            ?>
	</tr>
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p style="font-style: normal; font-weight: normal; text-decoration: none">
			<font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><span style="background: transparent">Faturamento
			total</span></font></font></font></p>
		</td>
		<?php
                for($count=0;$count<sizeof($matrizEachEmp);$count++){
            ?>
		<td width="87" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><span style="background: transparent">
                                        <?php findAnswer(678, $matrizEachEmp[$count]);?>
                                    </span></font></font></p>
		</td>
            <?php
                }
            ?>
	</tr>
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><span style="background: transparent">Investimento
			total recebidos</span></font></font></p>
		</td>
            <?php
                for($count=0;$count<sizeof($matrizEachEmp);$count++){
            ?>
		<td width="87" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><span style="background: transparent">
                                        <?php findAnswer(679, $matrizEachEmp[$count]);?>
                                    </span></font></font></p>
		</td>
            <?php
                }
            ?>
	</tr>
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><span style="background: transparent">Percentual
			da Graduada adquirida por outra empresa</span></font></font></p>
		</td>
            <?php
                for($count=0;$count<sizeof($matrizEachEmp);$count++){
            ?>
		<td width="87" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><span style="background: transparent">
                                        <?php findAnswer(680, $matrizEachEmp[$count]);?>
                                    </span></font></font></p>
		</td>
            <?php
                }
            ?>
	</tr>
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><span style="background: transparent">Total
			de Impostos gerado pela graduada no per&iacute;odo</span></font></font></p>
		</td>
            <?php
                for($count=0;$count<sizeof($matrizEachEmp);$count++){
            ?>
		<td width="87" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><span style="background: transparent">
                                        <?php findAnswer(681, $matrizEachEmp[$count]);?>
                                    </span></font></font></p>
		</td>
            <?php
                }
            ?>
	</tr>
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><span style="background: transparent">Apoio
			oferecido pela Graduada a Incubadora</span></font></font></p>
		</td>
            <?php
                for($count=0;$count<sizeof($matrizEachEmp);$count++){
            ?>
		<td width="87" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><span style="background: transparent">
                                        <?php findAnswer(682, $matrizEachEmp[$count]);?>
                                    </span></font></font></p>
		</td>
            <?php
                }
            ?>
	</tr>
</table>

<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>I</b><b>V</b><b>.
</b><b>PLANEJAMENTO DAS A&Ccedil;&Otilde;ES </b><b>E AUTOAVALIA&Ccedil;&Atilde;O
DA INCUBADORA</b></font></font></font></p>
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>
<table width="604" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="594">
	<tr>
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>A&ccedil;&otilde;es
			de Acompanhamento da Evolu&ccedil;&atilde;o das Graduadas</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="594" height="14" valign="top" style="background: transparent" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal; background: transparent">
			<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt">
                                    <?php findAnswer(640, $final) ?>
                                </font></font></font></p>
			
			<br/>
		</td>
	</tr>
	<tr>
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Periodicidade
			do Acompanhamento</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="594" valign="top" style="background: transparent" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt">
                                    <?php findAnswer(639, $final) ?>
                                </font></font></font></p>
			<br/>
		</td>
	</tr>
</table>
<table width="608" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="598">
	<tr style="background: transparent">
		<td width="598" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Apoios
			Oferecido<!-- Faltou os apoios utilizados não? --></b></font></font></font></p>
		</td>
	</tr>
	<tr style="background: transparent">
		<td width="598" height="74" valign="top" style="background: transparent" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><span style="background: transparent">
                                        <?php findAnswer(637, $final) ?>
                                    </span></font></font></font></p>
			<p align="center" style="margin-top: 0.05cm; font-weight: normal"><br/>

			</p>
		</td>
	</tr>
</table>

<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%; page-break-before: auto; page-break-after: auto">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>V.
AVALIA&Ccedil;&Atilde;O DA EFETIVIDADE E DAS A&Ccedil;&Otilde;ES DA
INCUBADORA</b></font></font></font></p>
<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>

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
			<p align="center" style="margin-bottom: 0cm"><font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 9pt">
                                        <?php findAnswer(632, $final) /*Eficacia das Ações*/ ?>
                                    </font></font></font></p>
                        
                        <br>
                        <br>
                        
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm">
			<font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 10pt"><b>EFICI&Ecirc;NCIA
			DAS A&Ccedil;&Otilde;ES:</b></font></font></font></p>
			<p align="left" style="margin-bottom: 0cm"><font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 9pt">
                                        <?php findAnswer(631, $final) /*Eficiencia das Ações*/?>
                                    </font></font></font></p>
			<br>
                        <br>
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
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
                            <?php findAnswer(629, $final) /*necessidade de mudança nas ações*/ ?>
			<br/>

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
                            <?php findAnswer(628, $final) /*Quais Ações*/?>
			<br/>
		</td>
	</tr>
</table>
<table width="605" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="595">
	<tr>
		<td width="595" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Periodicidade
			da Avalia&ccedil;&atilde;o</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="595" height="36" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                    <?php findAnswer(630, $final) ?> <!--## Exemplo:	Mensal, Trimestral, Semestral&hellip;. ##-->
                                </font></font></font></p>
			
		</td>
	</tr>
</table>


<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>
<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-style: normal; line-height: 100%">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>VI.
LI&Ccedil;&Otilde;ES APRENDIDAS</b></font></font></font></p>
<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-style: normal; line-height: 100%">
<br/>
<br/>

</p>
<table width="605" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="595">
	<tr style="background: transparent">
		<td width="595" height="25" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Li&ccedil;&otilde;es
			Aprendidas</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="595" height="36" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
                            <?php findAnswer(642, $final) ?> <!--## lições aprendidas ## -->
			<br/>

		</td>
	</tr>
</table>
<p style="margin-bottom: 0cm"><br/>

</p>
</body>
</html>

<?php

function bufferRelatorio_Final(){
    
    global $servername, $username, $password, $dbname;
    
    global $entidade, $entidadeId, $dataIni, $dataFim;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
    } 
    $sqlRelatorio = "
        SELECT 
	question.id AS idQuestion,
    question.name AS nameQuestion,
    answer.answer AS nameAnswer,
    answer.plugin_formcreator_forms_answers_id as idFormAnswer
    FROM 
       	(SELECT 
         q.id as IdQ,
         q.name as NameQ,
         a.answer AS NameA,
         formA.id AS IdFormA,
         formA.plugin_formcreator_forms_id as IdForm

         FROM glpi_plugin_formcreator_answers AS a
         
         INNER JOIN glpi_plugin_formcreator_forms_answers AS formA 
         	ON ( a.plugin_formcreator_forms_answers_id = formA.id)
         INNER JOIN glpi_plugin_formcreator_forms AS f 
         	ON ( formA.plugin_formcreator_forms_id = f.id)
         INNER JOIN glpi_plugin_formcreator_questions as q
         	ON (q.id = a.plugin_formcreator_questions_id)

         WHERE
             f.id = 31 AND  /* ID do relatorio */
             formA.entities_id = $entidadeId  AND /* ID da entidade */
             q.id = 687 AND /* ID da questão de checar dia */
             a.answer BETWEEN '$dataIni' and '$dataFim' /* Data de analise */

        ) AS access
            
    INNER JOIN glpi_plugin_formcreator_answers AS answer
    	ON (answer.plugin_formcreator_forms_answers_id = access.idFormA)
    INNER JOIN glpi_plugin_formcreator_questions as question
    	ON (answer.plugin_formcreator_questions_id = question.id)
        ";
    
    

    $result = $conn->query($sqlRelatorio);

    if ($result->num_rows > 0) {
        $i = 0;
        $matriz = [];
        while($row = $result->fetch_assoc()) {
            $matriz[$i][] = $row["idQuestion"];
            $matriz[$i][] = $row["nameAnswer"];
            $i++;
        }
        return $matriz;
    } else {
        echo "0 results";
        return false;
    }
    $conn->close();
}

function bufferRelatorio_Empreendedor(){
    
    global $servername, $username, $password, $dbname;
    
    global $entidade, $entidadeId, $dataIni, $dataFim;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
    } 
    $sqlRelatorio = "
        SELECT 
	question.id AS idQuestion,
    question.name AS nameQuestion,
    answer.answer AS nameAnswer,
    answer.plugin_formcreator_forms_answers_id as idFormAnswer
    FROM 
       	(SELECT 
         q.id as IdQ,
         q.name as NameQ,
         a.answer AS NameA,
         formA.id AS IdFormA,
         formA.plugin_formcreator_forms_id as IdForm

         FROM glpi_plugin_formcreator_answers AS a
         
         INNER JOIN glpi_plugin_formcreator_forms_answers AS formA 
         	ON ( a.plugin_formcreator_forms_answers_id = formA.id)
         INNER JOIN glpi_plugin_formcreator_forms AS f 
         	ON ( formA.plugin_formcreator_forms_id = f.id)
         INNER JOIN glpi_plugin_formcreator_questions as q
         	ON (q.id = a.plugin_formcreator_questions_id)

         WHERE
             f.id = 28 AND  /* ID do relatorio */
             formA.entities_id = $entidadeId  AND /* ID da entidade */
             q.id = 688 AND /* ID da questão de checar dia */
             a.answer BETWEEN '$dataIni' and '$dataFim'/* Data de analise */

        ) AS access
        /* access é o nome da tabela que carrega os formularios 
         * respondindos nos conformes de tempo */
    
    INNER JOIN glpi_plugin_formcreator_answers AS answer
    	ON (answer.plugin_formcreator_forms_answers_id = access.idFormA)
    INNER JOIN glpi_plugin_formcreator_questions as question
    	ON (answer.plugin_formcreator_questions_id = question.id)
        ";
    
    

    $result = $conn->query($sqlRelatorio);

    if ($result->num_rows > 0) {
        $i = 0;
        $matriz = [];
        while($row = $result->fetch_assoc()) {
            $matriz[$i][] = $row["idQuestion"];
            $matriz[$i][] = $row["nameAnswer"];
            $matriz[$i][] = $row["idFormAnswer"];

            $i++;
        }
        return $matriz;
    } else {
        echo "0 results";
        return false;
    }
    $conn->close();
}

function findAnswer($id,$matriz){
    
    
    $count = 0;
    $tam = sizeof($matriz);

    while($count < $tam ){
        if($matriz[$count][0] == $id){
            echo " ".$matriz[$count][1]." ";
        }
        $count++;
    }
    return "ID not Found";
}

function matrizEachEmpreendedor($matriz){  //para cada casa do vetor tem um array com todas as respostas desse empreendedor (gerando uma matriz)
    $matrizEmp = [];
    $id_formulario_respondido = $matriz[0][2];
    $count =0;
    $i=0;
    while($count < sizeof($matriz)){
        if ($id_formulario_respondido == $matriz[$count][2]){
            $matrizEmp[$i][] = $matriz[$count];
            //echo "matriz[".$i."][] count = ".$count." | Data = ".$matriz[$count][2]." <br>";
            $count++;
        }else{
            //echo "switch <br>";
            $i++;
            $id_formulario_respondido = $matriz[$count][2];
        }
    }
    return $matrizEmp;
}

?>