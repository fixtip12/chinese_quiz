<?php

class Question {
    private string $questionText;
    private array $questionChoices;
    private string $correctAnswer;

    public function __construct(string $questionText,array $questionChoices, string $correctAnswer)
    {
        $this->questionText = $questionText;
        $this->questionChoices = $questionChoices;
        $this->correctAnswer = $correctAnswer;
    }

    public function getQuestionText()
    {
        return $this->questionText;
    }

    public function getQuestionChoices()
    {
        return $this->questionChoices;
    }

    public function getCorrectAnswer()
    {
        return $this->correctAnswer;
    }
}
