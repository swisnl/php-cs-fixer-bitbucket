<?php

namespace Swis\PhpCsFixer\Report;

class ResultPrinter
{
    public function print(array $annotations): void
    {
        $errorsPerFile = [];
        foreach ($annotations as $annotation) {
            $errorsPerFile[$annotation['location']['path']] ??= [];
            $errorsPerFile[$annotation['location']['path']][] = str_replace('PHP-CS-Fixer.', '', $annotation['check_name']);
        }

        fwrite(STDOUT, "\n");
        $counter = 1;
        $padLength = strlen(count($errorsPerFile));
        foreach ($errorsPerFile as $file => $errors) {
            fwrite(STDOUT, sprintf("  %s) %s (%s)\n", str_pad($counter, $padLength, ' ', STR_PAD_LEFT), $file, implode(', ', array_unique($errors))));
            $counter++;
        }
        fwrite(STDOUT, "\n");
    }
}
