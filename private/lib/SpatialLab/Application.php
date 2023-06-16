<?php declare(strict_types=1);
/**
 * Initializing SpatialLab application:
 * 
 * - bootstrapping incl. registering AL
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/SpatialLab
 * @package SpatialLab
 * @version 0.1
 * @since 2023-06-16
 */


namespace SpatialLab;

final class Application
{

    /**
     * Namespace prefix for project files
     */
    public const NAMESPACE = 'SpatialLab';

    /**
     * Lib prefix
     */
    public const LIB_PREFIX = 'private/lib/';

    /**
     * Registering AL
     *
     * @return void
     */
    public function bootstrap()
    {
        /**
         * Registering project specific auto loading
         */
        spl_autoload_register(callback: function ($className) {

            // Check if namespace of class to be instantiated belongs to us
            if (str_starts_with($className,  self::NAMESPACE)) {
                $file = self::LIB_PREFIX . str_replace('\\', '/', $className) . '.php';
                //die($file);
                // Check if destination class file exists  and include it, if so - __do not throw__ \E*, because of AL chain!
                // @see https://www.php-fig.org/psr/psr-4/#2-specification : "4. Autoloader implementations *MUST NOT* throw exceptions,
                // MUST NOT raise errors of any level, and SHOULD NOT return a value."
                if (file_exists($file)) {
                    require_once $file;
                }
            }
        });
    }
}
(new Application())->bootstrap();


