<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1252"/>
	<title>Manual de Implanta&ccedil;&atilde;o Cerne 2018</title>
	<meta name="generator" content="LibreOffice 6.0.5.2 (Windows)"/>
	<meta name="author" content="Luciano Valente"/>
	<meta name="created" content="2018-09-25T17:22:00"/>
	<meta name="changed" content="2019-04-03T15:50:26.074000000"/>
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
	<img src="3-Relat%C3%B3rio_html_dde9ce1185cf5989.png" name="Figura3" align="left" width="167" height="49">
  <br clear="left"/>
</img>
<br/>
<br/>

	</p>
</div>
<p align="center" style="margin-bottom: 0cm; orphans: 2; widows: 2"><img src="3-Relat%C3%B3rio_html_dde9ce1185cf5989.png" name="Figura1" align="left" width="308" height="90">
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
<p align="center" style="margin-bottom: 0cm"><br/>

</p>
<p align="center"><font color="#000000"><font size="4" style="font-size: 14pt"><b><font face="Arial, sans-serif">R</font><font face="Arial, sans-serif">ELAT&Oacute;RIO
DE </font><font face="Arial, sans-serif">AVALIA&Ccedil;&Atilde;O </font><font face="Arial, sans-serif">DE
INCUBA&Ccedil;&Atilde;O</font></b></font></font></p>
<p align="center" style="font-weight: normal"><br/>
<br/>

</p>
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>I.
APRESENTA&Ccedil;&Atilde;O DOS EMPREENDIMENTOS</b></font></font></font></p>
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>
<?php
    $entidade = 'Itapina';
    $entidadeId = 10; /*ID do campus de Itapina*/
    $dataIni = '2019-03-01';
    $dataFim = '2019-03-31';
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

                    <td width="114" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="center" style="margin-top: 0.05cm"><font color="#000000" face="Arial, sans-serif" size="1" style="font-size: 8pt"><b>
                                        Nome do Empreendimento:
                                    </b></font></p>
                    </td>
                    <td colspan="2" width="463" valign="top" style="border: 1px solid #000000; padding: 0cm">
                            <p align="center" style="margin-top: 0.05cm"><font color="#000000" size="1" style="font-size: 12pt"><b>
                                <?php findAnswer(308,$matrizEachEmp[$count]); /*Nome do Empreendimento*/ ?>
                            </b></font></p>
                    </td>
            </tr>
            <tr>
                    <td rowspan="8" width="114" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>
                                                Informa&ccedil;&otilde;es Cadastrais:
                                            </b></font></font></font></p>
                    </td>
                    <td width="125" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000" face="Arial, sans-serif" size="1" style="font-size: 8pt"><b>
                                                Respons&aacute;vel:
                                            </b></font></p>
                    </td>
                    <td width="339" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000" face="Arial, sans-serif" size="1" style="font-size: 10pt"><b>
                                <?php findAnswer(307,$matrizEachEmp[$count]); /*Responsavel*/ ?>
                            </b></font></p>
                    </td>
            </tr>
            <tr>
                    <td width="125" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>
                                                CPF/CNPJ:
                                            </b></font></font></font></p>
                    </td>
                    <td width="339" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000" face="Arial, sans-serif" size="1" style="font-size: 10pt"><b>
                                <?php findAnswer(309,$matrizEachEmp[$count]); /*CPF/CNPJ*/ ?>
                            </b></font></p>
                    </td>
            </tr>
            <tr>
                    <td width="125" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Atua&ccedil;&atilde;o
                            do empreendimento:</b></font></font></font></p>
                    </td>
                    <td width="339" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000" face="Arial, sans-serif" size="1" style="font-size: 10pt"><b>
                                <?php findAnswer(310,$matrizEachEmp[$count]); /*Atuação do emp*/ ?>
                            </b></font></p>
                    </td>
            </tr>
            <tr>
                    <td width="125" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Telefone:</b></font></font></font></p>
                    </td>
                    <td width="339" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000" face="Arial, sans-serif" size="1" style="font-size: 10pt"><b>
                                <?php findAnswer(311,$matrizEachEmp[$count]); /*Telefone*/ ?>
                            </b></font></p>
                    </td>
            </tr>
            <tr>
                    <td width="125" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>E-mail:</b></font></font></font></p>
                    </td>
                    <td width="339" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000" face="Arial, sans-serif" size="1" style="font-size: 10pt"><b>
                                <?php findAnswer(312,$matrizEachEmp[$count]); /*E-mail*/ ?>
                            </b></font></p>
                    </td>
            </tr>
            <tr>
                    <td width="125" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm; font-weight: normal">
                            <font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Entrada
                                            na Incubadora:</b></font></font></font></p>
                    </td>
                    <td width="339" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000" face="Arial, sans-serif" size="1" style="font-size: 10pt"><b>
                                <?php findAnswer(313,$matrizEachEmp[$count]); /*Entrada na incubadora*/ ?>
                            </b></font></p>
                    </td>
            </tr>
            <tr>
                    <td width="125" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm; font-weight: normal">
                            <font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Data
                                        de Conclus&atilde;o:</b></font></font></font></p>
                    </td>
                    <td width="339" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000" face="Arial, sans-serif" size="1" style="font-size: 10pt"><b>
                                <?php findAnswer(314,$matrizEachEmp[$count]); /*Data de Conclusão*/ ?>
                            </b></font></p>
                    </td>
            </tr>
            <tr>
                    <td width="125" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
			<p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>N&ordm;
			Termo de Ades&atilde;o:</b></font></font></font></p>
                    </td>
                    <td width="339" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                        <p style="margin-top: 0.05cm"><b>
                                <?php findAnswer(315,$matrizEachEmp[$count]); /*Nº termo de Adesão*/ ?>
                            </b></p>
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
<br/>
<br/>

</p>
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>III.
INFORMA&Ccedil;&Otilde;ES ADICIONAIS</b></font></font></font></p>
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>
<table width="604" cellpadding="4" cellspacing="0" style="page-break-before: auto; page-break-after: auto">
	<col width="594">
	<tr>
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Principais
			Segmentos da Incubadora</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="594" height="17" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" style="font-weight: normal"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt">
                                    <?php segEntity(); /*Principais seg da inc*/ ?>
                                </font></font></p>
		</td>
	</tr>
</table>

<p><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>IV.
INFORMA&Ccedil;&Otilde;ES DO EMPREENDIMENTO</b></font></font></font></p>
<p><br/>
<br/>

</p>
<table width="604" cellpadding="4" cellspacing="0" style="background: transparent; page-break-inside: auto">
	<col width="594">
	<tr style="background: transparent">
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Descri&ccedil;&atilde;o
			dos Produtos e Servi&ccedil;os dos Empreendimentos</b></font></font></font></p>
		</td>
	</tr>
	<tr style="background: transparent">
		<td width="86" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<table width="582" cellpadding="4" cellspacing="0">
				<col width="105">
				<col width="459">
				<tr>
					<td width="105" valign="top" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><b>Nome
						do Empreendimento</b></font></font></p>
					</td>
					<td width="459" style="border: 1px solid #000000; padding: 0.1cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><b>Produtos
						ou Servi&ccedil;os</b></font></font></p>
					</td>
				</tr>


<?php
    for($count=0;$count<sizeof($matrizEachEmp);$count++){
?>

				<tr valign="top">
					<td width="105" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="justify">
                                                    <?php findAnswer(308, $matrizEachEmp[$count]);?>
						</p>
					</td>
					<td width="459" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="justify">
                                                    <?php findAnswer(316, $matrizEachEmp[$count]);?>
						</p>
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
		<td width="594" height="17" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Dados
			dos Empreendimentos</b></font></font></font></p>
		</td>
	</tr>
</table>

<!-- Dados dos empreendimentos -->
<table width="604" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto"> 
	<col width="594">
	<tr style="background: transparent">
		<td width="86" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<table width="582" cellpadding="4" cellspacing="0">
				<col width="150">
				<col width="59">
				<col width="83">
				<col width="57">
				<col width="71">
				<col width="112">
				<tr>
					<td rowspan="2" width="150" height="25" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Nome
						do Empreendimento</b></font></font></p>
					</td>
					<td colspan="5" width="414" style="border: 1px solid #000000; padding: 0.1cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Forma
						Jur&iacute;dica</b></font></font></p>
					</td>
				</tr>
				<tr>
					<td width="59" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Simples
						Nacional</b></font></font></p>
					</td>
					<td width="83" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>C&oacute;digo
						do Simples Nacional</b></font></font></p>
					</td>
					<td width="57" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Lucro
						Presumido</b></font></font></p>
					</td>
					<td width="71" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Lucro
						Real</b></font></font></p>
					</td>
					<td width="112" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Lucro
						Arbitr&aacute;rio</b></font></font></p>
					</td>
				</tr>
                                
<?php
    for($count=0;$count<sizeof($matrizEachEmp);$count++){
?>
                                    <tr valign="top">
					<td width="150" height="15" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif" size="1" style="font-size: 8pt">
                                                        <?php findAnswer(308, $matrizEachEmp[$count]);?>
                                                        </font></p>
					</td>
					<td width="59" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif" size="1" style="font-size: 8pt">
                                                        <?php findAnswer(317, $matrizEachEmp[$count]);?>
                                                        </font></p>
					</td>
					<td width="83" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif" size="1" style="font-size: 8pt">
                                                        <?php findAnswer(318, $matrizEachEmp[$count]);?>
                                                        </font></p>
					</td>
					<td width="57" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif" size="1" style="font-size: 8pt">
                                                        <?php findAnswer(319, $matrizEachEmp[$count]);?>
                                                        </font></p>
					</td>
					<td width="71" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
                                                <p align="center"><font face="Arial, sans-serif" size="1" style="font-size: 8pt">
                                                        <?php findAnswer(320, $matrizEachEmp[$count]);?>
                                                        </font></p>
					</td>
					<td width="112" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="center"><font face="Arial, sans-serif" size="1" style="font-size: 8pt">
                                                        <?php findAnswer(321, $matrizEachEmp[$count]);?>
                                                        </font></p>
					</td>
				</tr>
<?php
    }
?>                               
			</table>
		</td>
	</tr>
</table>

<!-- Quadro de funcionarios -->
<table width="604" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="594">
	<tr style="background: transparent">
		<td width="594" height="17" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>
                                            Quadro	de Funcion&aacute;rios</b></font></font></font></p>
		</td>
	</tr>
</table>
<table width="605" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="165">
	<col width="102">
	<col width="85">
	<col width="72">
	<col width="64">
	<col width="66">
	
	<tr>
		<td width="165" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Nome
			do Empreendimento</b></font></font></p>
		</td>
		<td width="102" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>N&ordm;
			de Funcion&aacute;rios CLT</b></font></font></p>
		</td>
		<td width="85" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>N&ordm;
			Funcion&aacute;rios Tempor&aacute;rios</b></font></font></p>
		</td>
		<td width="72" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>N&ordm;
			Estagi&aacute;rios</b></font></font></p>
		</td>
		<td width="64" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>N&ordm;
			Bolsista</b></font></font></p>
		</td>
		<td width="66" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>N&ordm;
			Menor Aprendiz</b></font></font></p>
		</td>
	</tr>
        
<?php
    for($count=0;$count<sizeof($matrizEachEmp);$count++){
?>
            <tr valign="top">
		<td width="131" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                            <?php findAnswer(308, $matrizEachEmp[$count]);?>
                                    </b></font></p>
		</td>
		<td width="131" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                            <?php findAnswer(324, $matrizEachEmp[$count]);?>
                                    </font></p>
		</td>
		<td width="131" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                            <?php findAnswer(325, $matrizEachEmp[$count]);?>
                                    </font></p>
		</td>
		<td width="131" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                            <?php findAnswer(326, $matrizEachEmp[$count]);?>
                                    </font></p>
		</td>
		<td width="131" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                            <?php findAnswer(327, $matrizEachEmp[$count]);?>
                                    </font></p>
		</td>
		<td width="44" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                            <?php findAnswer(328, $matrizEachEmp[$count]);?>
                                    </font></p>
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
                                    <?php findAnswer(308, $matrizEachEmp[$count]);?>
                                </font></p>
		</td>
		<td width="37" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                                    <?php findAnswer(330, $matrizEachEmp[$count]);?> 
                                </font></p>
		</td>
		<td width="37" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                                    <?php findAnswer(329, $matrizEachEmp[$count]);?> 
                                </font></p>
		</td>
		<td width="67" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                                    <?php findAnswer(659, $matrizEachEmp[$count]);?> 
                                </font></p>
		</td>
		<td width="52" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                                    <?php findAnswer(660, $matrizEachEmp[$count]);?> 
                                </font></p>
		</td>
		<td width="87" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                                    <?php findAnswer(661, $matrizEachEmp[$count]);?> 
                                </font></p>
		</td>
		<td width="57" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                                    <?php findAnswer(662, $matrizEachEmp[$count]);?> 
                                </font></p>
		</td>
<!--		<td width="67" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                                    <?php // findAnswer(661, $matrizEachEmp[$count]);?>
                                </font></p>
		</td>-->
		<td width="70" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                                    <?php findAnswer(332, $matrizEachEmp[$count]);?> 
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
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>INFORMA&Ccedil;&Otilde;ES
			FINANCEIRAS</b></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="165" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt"><b>Empreendimentos</b></font></font></p>
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
		<td width="67" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                                    <?php findAnswer(308, $matrizEachEmp[$count]);?>
                                </font></p>
		</td>
		<td width="67" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                                    <?php findAnswer(542, $matrizEachEmp[$count]);?>
                                </font></p>
		</td>
		<td width="67" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                                    <?php findAnswer(543, $matrizEachEmp[$count]);?>
                                </font></p>
		</td>
		<td width="67" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                                    <?php findAnswer(544, $matrizEachEmp[$count]);?>
                                </font></p>
		</td>
		<td width="44" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" face="Arial, sans-serif"><font size="1" style="font-size: 8pt">
                                    <?php findAnswer(545, $matrizEachEmp[$count]);?>
                                </font></p>
		</td>
	</tr>

<?php
    }
?>
</table>

<!-- Planejamento e Execução Financeira-->
<table width="605" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="138">
	<col width="87">
	<col width="83">
	<col width="75">
	<col width="87">
	<col width="86">
	<tr style="background: transparent">
		<td colspan="6" width="595" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0.1cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>PLANEJAMENTO
			E EXECU&Ccedil;&Atilde;O FINANCEIRA</b></font></font></p>
		</td>
	</tr>
	<tr>
		<td rowspan="2" width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Par&acirc;metros</b></font></font></p>
		</td>
		<td colspan="5" width="448" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Empreendimentos</b></font></font></p>
		</td>
	</tr>

	<tr>
<?php
    for($count=0;$count<sizeof($matrizEachEmp);$count++){ //loop "nomes"
?>
                <td width="86" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif" size="2" style="font-size: 10pt">
                                    <?php findAnswer(308, $matrizEachEmp[$count]);?>
                        </font></p>
		</td>
<?php
    }
?>
	</tr>
        
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">Investimento
			Inicial em Ativos</font></font></p>
		</td>
<?php
    for($count=0;$count<sizeof($matrizEachEmp);$count++){ //loop "Inicial em Ativos"
?>
                <td width="86" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif" size="2" style="font-size: 10pt">
                                    <?php findAnswer(333, $matrizEachEmp[$count]);?>
                        </font></p>
		</td>
<?php
    }
?>
	</tr>
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">Investimento
			Inicial </font></font>
			</p>
		</td>
<?php
    for($count=0;$count<sizeof($matrizEachEmp);$count++){ //loop "Inicial"
?>
                <td width="86" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif" size="2" style="font-size: 10pt">
                                    <?php findAnswer(546, $matrizEachEmp[$count]);?>
                        </font></p>
		</td>
<?php
    }
?>
	</tr>
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">Capital
			de Giro</font></font></p>
		</td>
<?php
    for($count=0;$count<sizeof($matrizEachEmp);$count++){ //loop "Capital de Giro"
?>
                <td width="86" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif" size="2" style="font-size: 10pt">
                                    <?php findAnswer(334, $matrizEachEmp[$count]);?>
                        </font></p>
		</td>
<?php
    }
?>
	</tr>
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p style="margin-bottom: 0cm"><font face="Arial, sans-serif" size="1" style="font-size: 7pt" color="#000000"><span style="text-decoration: none" style="font-style: normal" style="font-weight: normal">
                                    Al&iacute;quota (Simples Nacional, IR e CS
                                </span></font></p>
		</td>
<?php
    for($count=0;$count<sizeof($matrizEachEmp);$count++){ //loop "Aliquota"
?>
                <td width="86" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif" size="2" style="font-size: 10pt">
                                    <?php findAnswer(547, $matrizEachEmp[$count]);?>
                        </font></p>
		</td>
<?php
    }
?>
	</tr>
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">Deprecia&ccedil;&atilde;o
			anual dos ativos</font></font></p>
		</td>
<?php
    for($count=0;$count<sizeof($matrizEachEmp);$count++){ //loop "Depreciação"
?>
                <td width="86" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif" size="2" style="font-size: 10pt">
                                    <?php findAnswer(335, $matrizEachEmp[$count]);?>
                        </font></p>
		</td>
<?php
    }
?>
	</tr>
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">Horizonte
			do Projeto</font></font></p>
		</td>
                
<?php
    for($count=0;$count<sizeof($matrizEachEmp);$count++){ //loop "Horizonte do Projeto"
?>
                <td width="86" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif" size="2" style="font-size: 10pt">
                                    <?php findAnswer(336, $matrizEachEmp[$count]);?>
                        </font></p>
		</td>
<?php
    }
?>
                
	</tr>
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">Receita
			no primeiro intervalo </font></font>
			</p>
		</td>
		
<?php
    for($count=0;$count<sizeof($matrizEachEmp);$count++){ //loop "Receita primeiro intervalo"
?>
                <td width="86" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif" size="2" style="font-size: 10pt">
                                    <?php findAnswer(337, $matrizEachEmp[$count]);?>
                        </font></p>
		</td>
<?php
    }
?>         
                
	</tr>
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">Crescimento
			anual das Receitas</font></font></p>
		</td>
                
<?php
    for($count=0;$count<sizeof($matrizEachEmp);$count++){ //loop "Crescimento anual das receitas"
?>
                <td width="86" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif" size="2" style="font-size: 10pt">
                                    <?php findAnswer(338, $matrizEachEmp[$count]);?>
                        </font></p>
		</td>
<?php
    }
?>               
                
	</tr>
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">Crescimento
			anual das Receitas ap&oacute;s o horizonte do projeto</font></font></p>
		</td>
		
<?php
    for($count=0;$count<sizeof($matrizEachEmp);$count++){ //loop "após o horizonte"
?>
                <td width="86" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif" size="2" style="font-size: 10pt">
                                    <?php findAnswer(548, $matrizEachEmp[$count]);?>
                        </font></p>
		</td>
<?php
    }
?>   
                
	</tr>
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">Impostos
			diretos </font></font>
			</p>
		</td>
		
<?php
    for($count=0;$count<sizeof($matrizEachEmp);$count++){ //loop "Impostos diretos"
?>
                <td width="86" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif" size="2" style="font-size: 10pt">
                                    <?php findAnswer(339, $matrizEachEmp[$count]);?>
                        </font></p>
		</td>
<?php
    }
?>
                
	</tr>
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">Custo
			dos Produtos Vendidos/Receitas</font></font></p>
		</td>
		
<?php
    for($count=0;$count<sizeof($matrizEachEmp);$count++){ //loop "custo dos produtos vendidos"
?>
                <td width="86" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif" size="2" style="font-size: 10pt">
                                    <?php findAnswer(340, $matrizEachEmp[$count]);?>
                        </font></p>
		</td>
<?php
    }
?>
                
	</tr>
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">Despesas
			Administrativas (Fixas)</font></font></p>
		</td>
<?php
    for($count=0;$count<sizeof($matrizEachEmp);$count++){ //loop "Despesas Administrativas"
?>
                <td width="86" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif" size="2" style="font-size: 10pt">
                                    <?php findAnswer(341, $matrizEachEmp[$count]);?>
                        </font></p>
		</td>
<?php
    }
?>
	</tr>
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">Despesas
			Comerciais / Receitas</font></font></p>
		</td>
<?php
    for($count=0;$count<sizeof($matrizEachEmp);$count++){ //loop "Despesas Comerciais"
?>
                <td width="86" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif" size="2" style="font-size: 10pt">
                                    <?php findAnswer(342, $matrizEachEmp[$count]);?>
                        </font></p>
		</td>
<?php
    }
?>
	</tr>
	<tr valign="top">
		<td width="138" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="1" style="font-size: 7pt">Despesas
			Gerais (Fixas)</font></font></p>
		</td>
<?php
    for($count=0;$count<sizeof($matrizEachEmp);$count++){ //loop "Despesas Gerais"
?>
                <td width="86" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif" size="2" style="font-size: 10pt">
                                    <?php findAnswer(343, $matrizEachEmp[$count]);?>
                        </font></p>
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
<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%; page-break-before: auto; page-break-after: auto">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>I</b><b>I</b><b>I.
Q</b><b>UALIFICA&Ccedil;&Atilde;O D</b><b>OS</b><b> POTENCIAIS
EMPREENDEDORES</b></font></font></font></p>

<br/>
<br/>

<table width="604" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="594">
	<tr>
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>A&ccedil;&otilde;es
			para Qualifica&ccedil;&atilde;o dos Potenciais Empreendedores</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td style="text-align: center; border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<font color="#000000" face="Arial, sans-serif" size="2" style="font-size: 9pt">
                                   <?php findAnswer(624, $final) /*AQPE*/ ?>
                                </font></p>
			
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
		<td style="text-align: center; border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" style="margin-top: 0.05cm; font-weight: normal; background: transparent">
			<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt">
                                    <?php findAnswer(623, $final) ?> <!-- ## Exemplo: Mensal, Trimestral, Semestral ## -->
                                </font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Vagas
			Ofertadas</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td style="text-align: center; border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" style="margin-top: 0.05cm; font-weight: normal"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt">
                                        <?php findAnswer(621, $final) ?> <!-- ## Quantidades de vagas ofertadas ## -->
                                    </font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Crit&eacute;rios
			de Avalia&ccedil;&atilde;o</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td style="text-align: center; border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="justify" style="margin-top: 0.05cm; font-weight: normal">
			<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt">
                                    <?php findAnswer(622, $final) ?> <!-- ## O gestor precisa definir como os empreendedores podem submeter
			propostas &agrave; incubadora. Para isso, devem ser definidas as
			fases, os formul&aacute;rios e as ferramentas que ser&atilde;o
			utilizadas para a recep&ccedil;&atilde;o de propostas ## -->
                                </font></font></font>
			</p>
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
		<td style="text-align: center; border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
                    <br>
			<table width="578" cellpadding="4" cellspacing="0">
				<col width="182">
				<col width="186">
				<col width="185">
				<tr valign="top">
					<td width="182" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>N&ordm;
						Projetos/Propostas Recebidas</b></font></font></p>
					</td>
					<td width="186" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>N&ordm;
						Projetos/Propostas Selecionadas (Qualificadas)</b></font></font></p>
					</td>
					<td width="185" style="border: 1px solid #000000; padding: 0.1cm">
						<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Projetos
						recebidos fora da cidade/regi&atilde;o da incubadora</b></font></font></p>
					</td>
				</tr>
				<tr valign="top">
					<td width="182" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><br/>
                                                    <?php findAnswer(619, $final) ?> 
						</p>
					</td>
					<td width="186" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><br/>
                                                    <?php findAnswer(620, $final) ?>
						</p>
					</td>
					<td width="185" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="center"><br/>
                                                    <?php findAnswer(618, $final) ?>
						</p>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>


<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>
<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>IV.
APOIOS OFERECIDOS E UTILIZADOS</b></font></font></font></p>

<br/>
<br/>

<!-- Apios oferecidos e utilizados -->        

<table width="605" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="124">
	<col width="366">
	<col width="89">
	<tr style="background: transparent">
		<td colspan="3" width="595" height="22" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Apoios
			Oferecido</b></font></font></font></p>
		</td>
	</tr>
	<tr style="background: transparent">
		<td colspan="3" width="595" height="75" valign="top" style="background: transparent" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center" style="margin-top: 0.05cm; font-weight: normal"><br/>
                            <?php findAnswer(617, $final) ?> <!-- ## Apoios Oferecidos ## -->
			</p>
		</td>
	</tr>
        
        
	<tr style="background: transparent">
		<td colspan="3" width="595" height="22" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Apoios
			Utilizados</b></font></font></font></p>
		</td>
	</tr>
	<tr valign="top">
		<td width="124" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Nome
			do Empreendimento</b></font></font></p>
		</td>
		<td width="366" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Descri&ccedil;&atilde;o
			da Qualifica&ccedil;&atilde;o Desenvolvida </b></font></font></p>
		</td>
		<td width="93" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Valora&ccedil;&atilde;o</b>
			(Uso da Direx)</font></font></p>
		</td>
	</tr>
<?php
    for($count=0;$count < sizeof($matrizEachEmp);$count++){
?>
	<tr valign="top">
		<td width="6" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif" size="2" style="font-size: 10pt">
                                    <?php findAnswer(308, $matrizEachEmp[$count]) ?> <!-- ## Exemplo: Xempreendimentos ##-->
                                </font></p>
		</td>
		<td width="366" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                    <?php findAnswer(604, $matrizEachEmp[$count]) ?> <!-- ## Exemplo: Uso de sala (&aacute;rea f&iacute;sica: 18m&sup2;) ##-->
                                </font></font></p>
		</td>
		<td width="89" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                            <!-- Val disse que é pra direx preencher isso, logo nem aparece no formulario (x_x) -->
                                            </font></font></p>
		</td>
	</tr>
        
<?php
    }
?>


</table>
<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>
<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>V.
AVALIA&Ccedil;&Atilde;O DA EFETIVIDADE E DAS A&Ccedil;&Otilde;ES DE
QUALIFICA&Ccedil;&Atilde;O DE POTENCIAIS EMPREENDEDORES </b></font></font></font>
</p>
<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>

<!-- Avaliação da efetividade -->
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
                                        <?php findAnswer(612, $final) /*Eficacia das Ações*/ ?>
                                    </font></font></font></p>
                        
                        <br>
                        <br>
                        
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm">
			<font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 10pt"><b>EFICI&Ecirc;NCIA
			DAS A&Ccedil;&Otilde;ES:</b></font></font></font></p>
			<p align="left" style="margin-bottom: 0cm"><font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 9pt">
                                        <?php findAnswer(613, $final) /*Eficiencia das Ações*/?>
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
                            <?php findAnswer(615, $final) /*necessidade de mudança nas ações*/ ?>
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
                            <?php findAnswer(616, $final) /*Quais Ações*/?>
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
                                    <?php findAnswer(614, $final) ?> <!--## Exemplo:	Mensal, Trimestral, Semestral&hellip;. ##-->
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
                            <?php findAnswer(626, $final) ?> <!--## lições aprendidas ## -->
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
                 f.id = 30 AND  /* ID do relatorio */
                 formA.entities_id = $entidadeId  AND /* ID da entidade */
                 q.id = 663 AND /* ID da questão de checar dia */
                 a.answer BETWEEN '$dataIni' and '$dataFim'

            ) AS access

        INNER JOIN glpi_plugin_formcreator_answers AS answer
            ON (answer.plugin_formcreator_forms_answers_id = access.idFormA)
        INNER JOIN glpi_plugin_formcreator_questions as question
            ON (answer.plugin_formcreator_questions_id = question.id)

        /* 
         * 'access' é o nome da tabela que carrega os formularios respondindos nos conformes de tempo
         * Lembrando que os arquivos enviados ainda não foram tratados (não tem um destino ainda no PDF)
         */
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
                 f.id = 23 AND  /* ID do relatorio */
                 formA.entities_id = $entidadeId  AND /* ID da entidade */
                 q.id = 658 AND /* ID da questão de checar dia */
                 a.answer BETWEEN '$dataIni' and '$dataFim'

            ) AS access
            /* access é o nome da tabela que carrega os formularios 
             * respondindos nos conformes de tempo */

        INNER JOIN glpi_plugin_formcreator_answers AS answer
            ON (answer.plugin_formcreator_forms_answers_id = access.idFormA)
        INNER JOIN glpi_plugin_formcreator_questions as question
            ON (answer.plugin_formcreator_questions_id = question.id)
        /* 
         * 'access' é o nome da tabela que carrega os formularios respondindos nos conformes de tempo
         * Lembrando que os arquivos enviados ainda não foram tratados (não tem um destino ainda no PDF)
         */
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

function segEntity(){
    global $servername, $username, $password, $dbname;
    
    global $entidade, $entidadeId;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
    } 
    $sqlRelatorio = "
        SELECT 
            entities.name,
            entities.comment
        FROM glpi_entities as entities
        WHERE 
            entities.id = $entidadeId
    ";

    $result = $conn->query($sqlRelatorio);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo " ".$row["comment"]." ";
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

function matrizEachEmpreendedor($matriz){ 
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