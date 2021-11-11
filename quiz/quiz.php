<?php

require_once(__DIR__ . '/question.php');

class Quiz
{
    private int $quizNum;
    private array


    $quizzes = [];
    private ?array $userAnswers;
    private int $correctNum = 0;
    private int $inCorrectNum;

    public function __construct(int $quizNum, array $userAnswers = null)
    {
        $this->quizNum = $quizNum;
        $this->quizzes = [
             new Question('背包', ['リュックサック', 'りんご', 'きのこ', 'くだもの'], 'リュックサック'),
             new Question('蛋糕', ['もち', 'たまご', 'ケーキ', 'ちまき'], 'ケーキ'),
             new Question('退烧药', ['アスピリン', '風邪薬', '痛み止め', '解熱剤'], '解熱剤'),
             new Question('苹果', ['りんご', '風邪薬', '痛み止め', 'バナナ'], 'りんご'),
             new Question('手机', ['車', 'バス', '携帯', 'ベッド'], '携帯'),
        ];

        if ($userAnswers !== null) {
            $this->userAnswers = $userAnswers;
        }
    }

    public function getQuiz(): Question
    {
        return $this->quizzes[$this->quizNum];
    }

    public function getCorrectNum(): int
    {
        return $this->correctNum;
    }

    public function getInCorrectNum(): int
    {
        return $this->inCorrectNum;
    }

    public function getTotalQuizNum(): int
    {
        return count($this->quizzes);
    }

    /**
     * @return ArrayObject<Quiz>
     */
    public function getQuizzez(): array
    {
        return $this->quizzes;
    }

    public function hasNextQuiz(): bool
    {
        if ($this->quizNum < count($this->quizzes) - 1) {
            return true;
        } else {
            return false;
        }
    }


    public function calculateQuizGrade()
    {
        foreach ($this->userAnswers as $quizNum => $userAnswer) {
            $quiz = $this->quizzes[$quizNum];

            if ($userAnswer === $quiz->getCorrectAnswer()) {
                $this->correctNum++;
            }
        }

        $this->inCorrectNum = count($this->quizzes) - $this->correctNum;

        return floor($this->correctNum / count($this->quizzes) * 100);
    }
}
