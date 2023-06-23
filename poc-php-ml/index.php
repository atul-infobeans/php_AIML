<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

use Phpml\Dataset\Demo\WineDataset;
use Phpml\Dataset\ArrayDataset;
use Phpml\CrossValidation\StratifiedRandomSplit;
use Phpml\Classification\NaiveBayes;
use Phpml\Metric\Accuracy;

// Load the Iris dataset
$dataset = new WineDataset();

// Split the dataset into training and testing sets
$split = new StratifiedRandomSplit($dataset, 0.3);

$trainSamples = $split->getTrainSamples();
$trainLabels = $split->getTrainLabels();
$testSamples = $split->getTestSamples();
$testLabels = $split->getTestLabels();

// Create a decision tree classifier
$classifier = new NaiveBayes();

// Train the classifier
$classifier->train($trainSamples, $trainLabels);

// Make predictions on the test set
$predictions = $classifier->predict($testSamples);

// Calculate the accuracy of the classifier
$accuracy = Accuracy::score($testLabels, $predictions);

// Print the accuracy
echo 'Accuracy: ' . $accuracy;
?>