
<link rel="stylesheet" media="all" href="<?=ROOT_URL?>gitlab/assets/application.css" />
<link rel="stylesheet" media="print" href="<?=ROOT_URL?>gitlab/assets/print.css" />
<link rel="stylesheet"  type="text/css" href="<?=ROOT_URL?>dev/css/loading.css" />

<?
$floatType = 'fixed';

if($floatType=='fixed'){
?>
    <link rel="stylesheet"  type="text/css" href="<?=ROOT_URL?>dev/css/layout_fixed.css" />
<?
}else{
?>
    <link rel="stylesheet"  type="text/css" href="<?=ROOT_URL?>dev/css/layout_float.css" />
<?
}
?>