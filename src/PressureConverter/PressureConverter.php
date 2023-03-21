<?php
/**
 * Classe pour la conversion des pressions.
 *
 * Cette classe permet de convertir des pressions entre différentes unités, telles que les pascals, les bars et les livres par pouce carré (psi).
 * @author Franck Blanchard
 * @package PressureConverter
 */
declare(strict_types=1);

namespace Pressure;

class PressureConverter {

    /**
     * Convertit une pression de pascals en bars.
     *
     * @param float $pascals La pression en pascals.
     * @return float La pression en bars.
     */
    public function convertPascalsToBars($pascals) {
        return $pascals / 100000;
    }

    /**
     * Convertit une pression de bars en pascals.
     *
     * @param float $bars La pression en bars.
     * @return float La pression en pascals.
     */
    public function convertBarsToPascals($bars) {
        return $bars * 100000;
    }

    /**
     * Convertit une pression de pascals en livres par pouce carré (psi).
     *
     * @param float $pascals La pression en pascals.
     * @return float La pression en livres par pouce carré (psi).
     */
    public function convertPascalsToPsi($pascals) {
        return $pascals / 6895;
    }

    /**
     * Convertit une pression de livres par pouce carré (psi) en pascals.
     *
     * @param float $psi La pression en livres par pouce carré (psi).
     * @return float La pression en pascals.
     */
    public function convertPsiToPascals($psi) {
        return $psi * 6895;
    }

    /**
     * Convertit une pression de bars en livres par pouce carré (psi).
     *
     * @param float $bars La pression en bars.
     * @return float La pression en livres par pouce carré (psi).
     */
    public function convertBarsToPsi($bars) {
        return $bars * 14.5038;
    }

    /**
     * Convertit une pression de livres par pouce carré (psi) en bars.
     *
     * @param float $psi La pression en livres par pouce carré (psi).
     * @return float La pression en bars.
     */
    public function convertPsiToBars($psi) {
        return $psi / 14.5038;
    }
}
