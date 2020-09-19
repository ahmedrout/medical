<?php 

// prepares input (remove special chars and extra spaces)
function prepareInput(string $input): string
{
  return trim(htmlspecialchars($input));
} 

function redirect(string $path)
{
  header("location:" . URL . $path);
}

function aredirect(string $path)
{
  header("location:" . AURL . $path);
}