<?php

declare(strict_types=1);

namespace Seeders; 

use App\Model\User;
use Hyperf\Database\Seeders\Seeder;
use Hyperf\DbConnection\Db; 
class UserSeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Limpa a tabela de usuários antes de popular, para evitar duplicatas em execuções repetidas
        // Use isso com CAUTELA em ambientes que não sejam de desenvolvimento/teste!
        Db::table('users')->truncate(); // Assume que sua tabela se chama 'users'

        // Cria 5 usuários de exemplo
        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'username' => 'user' . $i,
                'email' => 'user' . $i . '@example.com',
                'password' => password_hash('password', PASSWORD_BCRYPT), // Sempre hasheie a senha!
                'remember_token' => null, // Deixe null ou gere um token se necessário
            ]);
        }

        // Você também pode criar um usuário específico, como um administrador
        User::create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => password_hash('admin123', PASSWORD_BCRYPT),
            'remember_token' => null,
        ]);

        $this->info('Users seeded successfully!');
    }

    /**
     * Método auxiliar para exibir informações no console (opcional).
     * @param string $message
     */
    protected function info(string $message): void
    {
        // Verifica se a função cli_echo_color existe (geralmente do hyperf/utils)
        // ou use um método de log padrão do Hyperf se preferir.
        if (function_exists('Hyperf\Support\make')) {
            try {
                // Tenta usar o Logger do Hyperf
                $logger = \Hyperf\Support\make(\Psr\Log\LoggerInterface::class);
                $logger->info($message);
            } catch (\Throwable $e) {
                // Fallback para echo se o logger não for resolvível ou houver erro
                echo $message . PHP_EOL;
            }
        } else {
            echo $message . PHP_EOL;
        }
    }
}
