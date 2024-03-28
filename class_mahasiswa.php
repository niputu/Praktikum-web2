<?php
class NilaiMahasiswa {
    private $nim;
    private $course;
    private $score;
    private $grade;

    public function __construct($nim, $course, $score) {
        $this->nim = $nim;
        $this->course = $course;
        $this->score = $score;

        $this->grade = $this->getGrade();
    }

    public function getKelulusan() {
        if ($this->score < 56) {
            return 'TIDAK LULUS';
        }

        return 'LULUS';
    }

    private function getGrade() {
        if ($this->score >= 85) {
            return 'A';
        } elseif ($this->score >= 70) {
            return 'B';
        } elseif ($this->score >= 56) {
            return 'C';
        } elseif ($this->score >= 36) {
            return 'D';
        } else {
            return 'E';
        }
    }

    public function getStudentDetails() {
        $kelulusan = $this->getKelulusan();

        return "NIM: {$this->nim}\nCourse: {$this->course}\nScore: {$this->score}\nKelulusan: {$kelulusan}\nGrade: {$this->grade}";
    }
}
?>