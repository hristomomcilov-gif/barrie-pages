<?php
/**
 * Shared quote inbox for shop one-pagers.
 * Emails contact@teamulate.ca — do not add a shop email.
 */

$shops = array(
  'jeff-mackie' => '/sites/jeff-mackie/',
  'walkers-electric' => '/sites/walkers-electric/',
  'derbecker' => '/sites/derbecker/',
);

function quote_line($value)
{
  $value = str_replace(array("\r", "\n"), ' ', (string) $value);
  return trim($value);
}

function quote_block($value)
{
  $value = str_replace("\r\n", "\n", (string) $value);
  $value = str_replace("\r", "\n", $value);
  return trim($value);
}

$shop = isset($_POST['shop']) ? quote_line($_POST['shop']) : '';
$path = isset($shops[$shop]) ? $shops[$shop] : '';

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || $path === '') {
  header('Location: /', true, 303);
  exit;
}

$name = isset($_POST['name']) ? quote_line($_POST['name']) : '';
$phone = isset($_POST['phone']) ? quote_line($_POST['phone']) : '';
$need = isset($_POST['need']) ? quote_block($_POST['need']) : '';
$town = isset($_POST['town']) ? quote_line($_POST['town']) : '';
$job = isset($_POST['job']) ? quote_line($_POST['job']) : '';

if ($name === '' || $phone === '' || $need === '') {
  header('Location: ' . $path . '#contact', true, 303);
  exit;
}

$lines = array(
  'Shop: ' . $shop,
  'Name: ' . $name,
  'Phone: ' . $phone,
);
if ($town !== '') {
  $lines[] = 'Town: ' . $town;
}
if ($job !== '') {
  $lines[] = 'Job: ' . $job;
}
$lines[] = 'Need:';
$lines[] = $need;

$body = implode("\n", $lines);
$subject = 'Quote request — ' . $shop;
$headers = implode("\r\n", array(
  'From: Teamulate <contact@teamulate.ca>',
  'Reply-To: contact@teamulate.ca',
  'Content-Type: text/plain; charset=UTF-8',
  'X-Mailer: barrie-pages',
));

@mail('contact@teamulate.ca', $subject, $body, $headers);

header('Location: ' . $path . '?sent=1#contact', true, 303);
exit;
