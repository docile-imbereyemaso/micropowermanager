<?php

namespace App\Plugins\WhatsappMessaging\Models;

use App\Models\Base\BaseModel;
use Illuminate\Support\Carbon;

/**
 * @property int           $id
 * @property string        $body_parser
 * @property string        $template_name
 * @property string        $language_code
 * @property array<string> $parameters
 * @property bool          $is_active
 * @property Carbon|null   $created_at
 * @property Carbon|null   $updated_at
 */
class WhatsappTemplate extends BaseModel {
    protected $table = 'whatsapp_templates';

    protected function casts(): array {
        return [
            'parameters' => 'array',
            'is_active' => 'boolean',
        ];
    }
}
