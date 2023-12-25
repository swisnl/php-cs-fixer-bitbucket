<?php

namespace Swis\PhpCsFixer\Report;

use Swis\Bitbucket\Reports\BitbucketApiClient;

class BitbucketReporter
{
    private const REPORT_TITLE = 'PHP CS Fixer';

    private BitbucketApiClient $apiClient;

    public function __construct()
    {
        $this->apiClient = new BitbucketApiClient();
    }

    public function report(array $annotations): void
    {
        $reportUuid = $this->apiClient->createReport(self::REPORT_TITLE, count($annotations));

        foreach ($annotations as $annotation) {
            $this->apiClient->addAnnotation(
                $reportUuid,
                $annotation['description'],
                $annotation['location']['path'],
                $annotation['location']['lines']['begin'] ?: null
            );
        }
    }
}
