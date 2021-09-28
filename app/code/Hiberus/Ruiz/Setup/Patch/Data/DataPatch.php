<?php

namespace Hiberus\Ruiz\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchRevertableInterface;

class DataPatch
    implements DataPatchInterface, PatchRevertableInterface
{

    private $moduleDataSetup;

    public function __construct(
        \Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetup
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
    }

    /**
     * @inheritDoc
     */
    public static function getDependencies()
    {
        /**
         * Esta es la dependencia de otro patch. La dependencia debe aplicarse en la primera versión,
         * un patch puede tener pocas dependencias. Los patches no tienen versiones, por lo que si en el enfoque
         * anterior con los scripts de instalación / actualización de datos usó versiones, ahora mismo debe apuntar
         * desde un patch con una versión superior a otro con una versión inferior. Pero tenga en cuenta que algunos
         * de sus patches pueden ser independientes. y se puede instalar en cualquier secuencia
         * Por lo tanto, use las dependencias solo si esto es importante para usted.
         */
//        return [
//            SomeDependency::class
//        ];
    }

    /**
     * @inheritDoc
     */
    public function getAliases()
    {
        /**
         * Este método interno de Magento, eso significa que algunos patches con el tiempo pueden cambiar sus nombres,
         * pero el cambio de nombre no debería afectar el proceso de instalación, por eso si cambiamos el nombre del
         * patch agregaremos alias aquí.
         */
        // TODO: Implement getAliases() method.
//        return [];
    }

    /**
     * @inheritDoc
     */
    public function apply()
    {
//        $this->moduleDataSetup->getConnection()->startSetup();
        //El código que desea aplicar en el patch
        //Tenga en cuenta que un patche es responsable solo de una versión de instalación.
        // Entonces, un UpgradeData puede constar de algunos patches de datos.
//        $this->moduleDataSetup->getConnection()->endSetup();
    }

    public function revert()
    {
        /**
         * Aquí debería ir el código que revertirá todas las operaciones del método `apply`.
         * Tenga en cuenta que algunas operaciones, como eliminar datos de la columna, que están en el rol de
         * referencia de la clave foránea, son peligrosas, porque pueden activar la instrucción ON DELETE.
         */
        // TODO: Implement revert() method.
    }
}
