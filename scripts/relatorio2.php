<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1252"/>
	<title>Manual de Implanta&ccedil;&atilde;o Cerne 2018</title>
	<meta name="generator" content="LibreOffice 6.0.5.2 (Windows)"/>
	<meta name="author" content="Luciano Valente"/>
	<meta name="created" content="2018-09-25T17:22:00"/>
	<meta name="changed" content="2019-02-25T09:52:46.522000000"/>
	<style type="text/css">
		@page { margin-left: 3.5cm; margin-right: 1.5cm }
		p { margin-bottom: 0.21cm }
		td p { margin-bottom: 0cm }
		a:link { so-language: zxx }
	</style>
</head>

<div title="header">
	<p style="margin-top: 0.42cm; margin-bottom: 0.5cm; page-break-after: avoid">
	<img src="2-Relatorio_html_dde9ce1185cf5989.png" name="Figura3" align="left" width="167" height="49">
  <br clear="left"/>
</img>
<br/>
<br/>

	</p>
</div>
<p align="center" style="margin-bottom: 0cm; orphans: 2; widows: 2"><img src="2-Relatorio_html_dde9ce1185cf5989.png" name="Figura1" align="left" width="308" height="90">
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
PR&Eacute;-INCUBA&Ccedil;&Atilde;O</font></b></font></font></p>
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
                                <?php findAnswer(400,$matrizEachEmp[$count]); /*Nome do Empreendimento*/ ?>
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
                                <?php findAnswer(401,$matrizEachEmp[$count]); /*Responsavel*/ ?>
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
                                <?php findAnswer(402,$matrizEachEmp[$count]); /*CPF/CNPJ*/ ?>
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
                                <?php findAnswer(403,$matrizEachEmp[$count]); /*Atuação do emp*/ ?>
                            </b></font></p>
                    </td>
            </tr>
            <tr>
                    <td width="125" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Telefone:</b></font></font></font></p>
                    </td>
                    <td width="339" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000" face="Arial, sans-serif" size="1" style="font-size: 10pt"><b>
                                <?php findAnswer(404,$matrizEachEmp[$count]); /*Telefone*/ ?>
                            </b></font></p>
                    </td>
            </tr>
            <tr>
                    <td width="125" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>E-mail:</b></font></font></font></p>
                    </td>
                    <td width="339" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000" face="Arial, sans-serif" size="1" style="font-size: 10pt"><b>
                                <?php findAnswer(405,$matrizEachEmp[$count]); /*E-mail*/ ?>
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
                                <?php findAnswer(406,$matrizEachEmp[$count]); /*Entrada na incubadora*/ ?>
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
                                <?php findAnswer(407,$matrizEachEmp[$count]); /*Data de Conclusão*/ ?>
                            </b></font></p>
                    </td>
            </tr>
            <tr>
                    <td width="125" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Possui
                            capital pr&oacute;prio:</b></font></font></font></p>
                    </td>
                    <td width="339" valign="top" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm">
                            <p align="left" style="margin-right: 0.1cm; margin-top: 0.05cm"><font color="#000000" face="Arial, sans-serif" size="1" style="font-size: 10pt"><b>
                                <?php findAnswer(408,$matrizEachEmp[$count]); /*possui capital próprio*/ ?>
                            </b></font></p>
                    </td>
            </tr>
    </table>
<?php
    }
?>

<br/>
<br/>

<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>III.
INFORMA&Ccedil;&Otilde;ES ADICIONAIS</b></font></font></font></p>

<br/>
<br/>



<table width="604" cellpadding="4" cellspacing="0" style="page-break-before: auto; page-break-after: auto">
	<col width="594">
	<tr>
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>
                            Principais Segmentos da Incubadora
                        </b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td style="text-align: center; border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
		
                <?php segEntity(); /*Principais seg da inc*/ ?>
	
		</td>
	</tr>
</table>
<br/>
<table width="604" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="594">
	<tr style="background: transparent">
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Descri&ccedil;&atilde;o
			dos Produtos e Servi&ccedil;os por Empreendimentos</b></font></font></font></p>
		</td>
	</tr>
	<tr style="background: transparent">
		<td style="text-align: center; border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<table width="100%" cellpadding="4" cellspacing="0">
				<col width="47*">
				<col width="209*">
				<tr>
					<td width="18%" valign="top" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><b>Nome
						do Empreendimento</b></font></font></p>
					</td>
					<td width="82%" style="border: 1px solid #000000; padding: 0.1cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><b>Produtos
						ou Servi&ccedil;os</b></font></font></p>
					</td>
				</tr>
<?php
    for($count=0;$count < sizeof($matrizEachEmp);$count++){
?>
				<tr valign="top">
					<td width="18%" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="justify">
                                                    <?php findAnswer(400,$matrizEachEmp[$count]); /*Nome do empreendimento*/ ?>
						</p>
					</td>
					<td width="82%" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="justify">
                                                    <?php findAnswer(409,$matrizEachEmp[$count]); /*Produtos ou serviços*/ ?>
						</p>
					</td>
				</tr>
<?php
    }
?>
			</table>
			
		</td>
	</tr>
</table>
<br/>

<table width="604" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="594">
	<tr style="background: transparent">
		<td width="594" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Dados
			dos Empreendimentos</b></font></font></font></p>
		</td>
	</tr>
</table>
<table width="604" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="594">
	<tr style="background: transparent">
		<td style="text-align: center; border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<table width="594" cellpadding="4" cellspacing="0">
				<col width="96">
				<col width="72">
				<col width="101">
				<col width="72">
				<col width="78">
				<col width="124">
				<tr>
					<td width="96" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><b>Nome
						do Empreendimento</b></font></font></p>
					</td>
					<td width="72" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><b>Possui
						Funcion&aacute;rio</b></font></font></p>
					</td>
					<td width="101" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><b>Enquadramento
						Tribut&aacute;rio Indicado</b></font></font></p>
					</td>
					<td width="72" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><b>Recursos
						Pr&oacute;prio (%)</b></font></font></p>
					</td>
					<td width="78" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><b>Recursos
						de Terceiro (%)</b></font></font></p>
					</td>
					<td width="124" style="border: 1px solid #000000; padding: 0.1cm">
						<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 9pt"><b>Capta&ccedil;&atilde;o
						de Recursos Indicado</b></font></font></p>
					</td>
				</tr>
<?php
    for($count=0;$count < sizeof($matrizEachEmp);$count++){
?>
				<tr valign="top">
					<td width="96" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="justify"><br/>
                                                    <?php findAnswer(400,$matrizEachEmp[$count]); /*## Nome do Empreendimento ##*/ ?>
						</p>
					</td>
					<td width="72" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="justify"><br/>
                                                    <?php findAnswer(410,$matrizEachEmp[$count]); /*## Possui Funcionário ##*/ ?>
						</p>
					</td>
					<td width="101" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="justify"><br/>
                                                    <?php findAnswer(411,$matrizEachEmp[$count]); /*## Enquadramento Tributário Indicado ##*/ ?>
						</p>
					</td>
					<td width="72" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="justify"><br/>
                                                    <?php findAnswer(412,$matrizEachEmp[$count]); /*## Recursos Próprio (%) ##*/ ?>
						</p>
					</td>
					<td width="78" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="justify"><br/>
                                                    <?php findAnswer(413,$matrizEachEmp[$count]); /*## Recursos de Terceiro (%) ##*/ ?>
						</p>
					</td>
					<td width="124" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="justify"><br/>
                                                    <?php findAnswer(414,$matrizEachEmp[$count]); /*## Captação de Recursos Indicado ##*/ ?>
						</p>
					</td>
				</tr>
<?php
    }
?>				
			</table>
		</td>
	</tr>
</table>
<br/>
<br/>

<p style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%; page-break-before: auto; page-break-after: auto">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>I</b><b>I</b><b>I.
Q</b><b>UALIFICA&Ccedil;&Atilde;O D</b><b>OS</b><b> POTENCIAIS
EMPREENDEDORES</b></font></font></font></p>
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
		<td style="text-align: center; border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<font color="#000000" face="Arial, sans-serif" size="2" style="font-size: 9pt">
                                   <?php findAnswer(609, $final) /*AQPE*/ ?>
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
                                    <?php findAnswer(465, $final) ?> <!-- ## Exemplo: Mensal, Trimestral, Semestral ## -->
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
                                        <?php findAnswer(466, $final) ?> <!-- ## Quantidades de vagas ofertadas ## -->
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
                                    <?php findAnswer(467, $final) ?> <!-- ## O gestor precisa definir como os empreendedores podem submeter
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
                                                    <?php findAnswer(468, $final) ?> 
						</p>
					</td>
					<td width="186" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="center"><br/>
                                                    <?php findAnswer(469, $final) ?>
						</p>
					</td>
					<td width="185" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="center"><br/>
                                                    <?php findAnswer(470, $final) ?>
						</p>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<br/>
<br/>

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
                            <?php findAnswer(611, $final) ?> <!-- ## Apoios Oferecidos ## -->
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
			<p align="center"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>Descri&ccedil;&atilde;o</b></font></font></p>
		</td>
		<td width="89" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
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
                                    <?php findAnswer(400, $matrizEachEmp[$count]) ?> <!-- ## Exemplo: Xempreendimentos ##-->
                                </font></p>
		</td>
		<td width="366" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                    <?php findAnswer(608, $matrizEachEmp[$count]) ?> <!-- ## Exemplo: Uso de sala (&aacute;rea f&iacute;sica: 18m&sup2;) ##-->
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
<br/>
<br/>

<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>IV.
MODALIDADE RESID&Ecirc;NCIA</b></font></font></font></p>
<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<br/>
<br/>

</p>
<table width="605" cellpadding="4" cellspacing="0" style="background: transparent; page-break-before: auto; page-break-after: auto; page-break-inside: auto">
	<col width="112">
	<col width="60">
	<col width="64">
	<col width="335">
	<tr style="background: transparent">
		<td colspan="4" width="595" valign="top" bgcolor="#dddddd" style="background: #dddddd" style="border: 1px solid #000000; padding: 0.1cm">
			<p align="center" style="background: #cccccc"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b><span style="background: #dddddd">Pr&eacute;
			Incuba&ccedil;&atilde;o &ndash; Modalidade Resid&ecirc;ncia</span></b></font></font></font></p>
		</td>
	</tr>
	<tr valign="top">
		<td width="112" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Empreendimento</b></font></font></p>
		</td>
		<td width="60" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Data
			da entrada</b></font></font></p>
		</td>
		<td width="64" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Data
			da Conclus&atilde;o</b></font></font></p>
		</td>
		<td width="335" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="center"><font face="Arial, sans-serif"><font size="1" style="font-size: 8pt"><b>Motivo/Justificativa
			da Perman&ecirc;ncia</b></font></font></p>
		</td>
	</tr>
        
<?php
    for($count=0;$count < sizeof($matrizEachEmp);$count++){
?>
	<tr valign="top">
		<td width="112" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="left">
                            <?php findAnswer(400, $matrizEachEmp[$count]); ?>
			</p>
		</td>
		<td width="60" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="left">
                            <?php findAnswer(643, $matrizEachEmp[$count]); ?> 
			</p>
		</td>
		<td width="64" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
			<p align="left">
                            <?php findAnswer(644, $matrizEachEmp[$count]); ?>
			</p>
		</td>
		<td width="335" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
			<p align="left">
                            <?php findAnswer(645, $matrizEachEmp[$count]); ?>
			</p>
		</td>
	</tr>
<?php
    }
?>
        
</table>
<br/>
<br/>


<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>V.
AVALIA&Ccedil;&Atilde;O DA EFETIVIDADE E DAS A&Ccedil;&Otilde;ES DE
QUALIFICA&Ccedil;&Atilde;O DE POTENCIAIS EMPREENDEDORES </b></font></font></font>
</p>
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
                                        <?php findAnswer(415, $final) /*Eficacia das Ações*/ ?>
                                    </font></font></font></p>
                        
                        <br>
                        <br>
                        
			<p align="justify" style="margin-top: 0.05cm; margin-bottom: 0.05cm">
			<font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 10pt"><b>EFICI&Ecirc;NCIA
			DAS A&Ccedil;&Otilde;ES:</b></font></font></font></p>
			<p align="left" style="margin-bottom: 0cm"><font color="#000000"><font face="Arial, serif"><font size="2" style="font-size: 9pt">
                                        <?php findAnswer(416, $final) /*Eficiencia das Ações*/?>
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
                            <?php findAnswer(483, $final) /*necessidade de mudança nas ações*/ ?>
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
                            <?php findAnswer(484, $final) /*Quais Ações*/?>
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
			<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal">
			<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">
                                    <?php findAnswer(485, $final) ?> <!--## Exemplo:	Mensal, Trimestral, Semestral&hellip;. ##-->
                                </font></font></font></p>
			
		</td>
	</tr>
</table>

<br/>
<br/>


<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>VI.
REGISTRO DAS A&Ccedil;&Otilde;ES </b></font></font></font>
</p>
<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; line-height: 100%">
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
			Efetividade das A&ccedil;&otilde;es (Anexos)</b></font></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="595" height="397" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
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
						Lista de Matriculados</font></font></font></p>
					</td>
				</tr>
				<tr valign="top">
					<td width="146" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">002</font></font></font></p>
					</td>
					<td width="408" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">Exemplo:
						Registro geral da pontua&ccedil;&atilde;o dos Crit&eacute;rios
						de Sele&ccedil;&atilde;o e Avalia&ccedil;&atilde;o</font></font></font></p>
					</td>
				</tr>
				<tr valign="top">
					<td width="146" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">003</font></font></font></p>
					</td>
					<td width="408" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">Exemplo:
						Registro Geral da Pontua&ccedil;&atilde;o da Apresenta&ccedil;&atilde;o
						Oral</font></font></font></p>
					</td>
				</tr>
				<tr valign="top">
					<td width="146" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">004</font></font></font></p>
					</td>
					<td width="408" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">Exemplo:
						Lista dos Profissionais (Docentes e Orientadores) envolvidos</font></font></font></p>
					</td>
				</tr>
				<tr valign="top">
					<td width="146" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">005</font></font></font></p>
					</td>
					<td width="408" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">Exemplo:
						Ementa do conte&uacute;do da qualifica&ccedil;&atilde;o dos
						Empreendedores</font></font></font></p>
					</td>
				</tr>
				<tr valign="top">
					<td width="146" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">006</font></font></font></p>
					</td>
					<td width="408" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">Exemplo:
						Crit&eacute;rios de Avalia&ccedil;&atilde;o (Modelo)</font></font></font></p>
					</td>
				</tr>
				<tr valign="top">
					<td width="146" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">007</font></font></font></p>
					</td>
					<td width="408" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">Exemplo:
						Cronograma </font></font></font>
						</p>
					</td>
				</tr>
				<tr valign="top">
					<td width="146" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">008</font></font></font></p>
					</td>
					<td width="408" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="left" style="margin-top: 0.05cm"><font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt">Exemplo:
						Rela&ccedil;&atilde;o final dos empreendedores classificados
						para Incuba&ccedil;&atilde;o</font></font></font></p>
					</td>
				</tr>
				<tr valign="top">
					<td width="146" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
						<p align="left" style="margin-top: 0.05cm"><br/>

						</p>
					</td>
					<td width="408" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
						<p align="left" style="margin-top: 0.05cm"><br/>

						</p>
					</td>
				</tr>
			</table>
			<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-weight: normal; line-height: 100%">
			<br/>
<br/>

			</p>
		</td>
	</tr>
</table>


<br/>
<br/>


<p align="left" style="margin-top: 0.05cm; margin-bottom: 0.05cm; font-style: normal; line-height: 100%">
<font color="#000000"><font face="Arial, sans-serif"><font size="2" style="font-size: 10pt"><b>VII.
REGISTRO DAS A&Ccedil;&Otilde;ES E LI&Ccedil;&Otilde;ES APRENDIDAS</b></font></font></font></p>
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
                            <?php findAnswer(487, $final) ?> <!--## lições aprendidas ## -->
			<br/>

		</td>
	</tr>
</table>



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
                f.id = 26 AND  /* ID do relatorio */
                formA.entities_id = 10  AND /* ID da entidade */
                q.id = 656 AND /* ID da questão de checar dia */
                a.answer BETWEEN '2019-03-24' and '2019-03-26'

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
                f.id = 25 AND  /* ID do relatorio */
                formA.entities_id = $entidadeId  AND /* ID da entidade */
                q.id = 657 AND /* ID da questão de checar dia */
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