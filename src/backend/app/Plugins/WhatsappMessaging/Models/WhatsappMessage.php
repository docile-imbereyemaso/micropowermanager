<?php

namespace App\Plugins\WhatsappMessaging\Models;

use App\Models\Base\BaseModel;
use App\Models\Sms;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * @property      int                  $id
 * @property      int                  $sms_id
 * @property      int|null             $whatsapp_contact_id
 * @property      string|null          $wamid
 * @property      string               $message_type
 * @property      string|null          $template_name
 * @property      string|null          $template_language
 * @property      string               $status
 * @property      int|null             $error_code
 * @property      string|null          $error_message
 * @property      Carbon|null          $sent_at
 * @property      Carbon|null          $delivered_at
 * @property      Carbon|null          $read_at
 * @property      Carbon|null          $failed_at
 * @property      string|null          $pricing_category
 * @property      Carbon|null          $created_at
 * @property      Carbon|null          $updated_at
 * @property-read Sms|null             $sms
 * @property-read WhatsappContact|null $contact
 */
class WhatsappMessage extends BaseModel {
    public const MESSAGE_TYPE_TEXT = 'text';
    public const MESSAGE_TYPE_TEMPLATE = 'template';

    public const STATUS_ACCEPTED = 'accepted';
    public const STATUS_SENT = 'sent';
    public const STATUS_DELIVERED = 'delivered';
    public const STATUS_READ = 'read';
    public const STATUS_FAILED = 'failed';

    protected $table = 'whatsapp_messages';

    protected function casts(): array {
        return [
            'sent_at' => 'datetime',
            'delivered_at' => 'datetime',
            'read_at' => 'datetime',
            'failed_at' => 'datetime',
        ];
    }

    /**
     * @return BelongsTo<Sms, $this>
     */
    public function sms(): BelongsTo {
        return $this->belongsTo(Sms::class);
    }

    /**
     * @return BelongsTo<WhatsappContact, $this>
     */
    public function contact(): BelongsTo {
        return $this->belongsTo(WhatsappContact::class, 'whatsapp_contact_id');
    }
}
