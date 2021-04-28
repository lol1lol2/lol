<?php

namespace lol1lol2\lol;

class Dancer
{
    /**
     * @return string
     */
    public function snow(): string
    {
        $result = '';
        for ($i = 0; $i <= 1000; $i++) {
            if (0 === $i % 100) {
                $result .= "\n";
                continue;
            }

            $result .= $this->randBool() ? '*' :  ' ' ;
        }

        return $result;
    }

    /**
     * @return bool
     */
    private function randBool(): bool
    {
        return 1 === rand(0, 50);
    }
}
