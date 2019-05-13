<?php

return [
	'id' => 'yii2project',
	'basePath' => realpath(__DIR__ . '/../'),
  'bootstrap' => [
    'debug'
  ],
  'components' => [
    'urlManager' => [
      'enablePrettyUrl' => true,
      'showScriptName' => false
    ],
    'request' => [
      'cookieValidationKey' => 'Secret Key'
    ]
  ],
  'modules' => [
    'debug' => 'yii\debug\Module'
  ]
];

?>