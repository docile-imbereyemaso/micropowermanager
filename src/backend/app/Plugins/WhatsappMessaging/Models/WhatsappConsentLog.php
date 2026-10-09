<?php

namespace App\Plugins\WhatsappMessaging\Models;

use App\Models\Base\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * @property      int                  $id
 * @property      int                  $whatsapp_contact_id
 * @property      string               $action
 * @property      string               $source
 * @property      int|null             $user_id
 * @property      string|null          $raw_message
 * @property      Carbon|null          $created_at
 * @property      Carbon|null          $updated_at
 * @property-read WhatsappContact|null $contact
 */
class WhatsappConsentLog extends BaseModel {
    public const ACTION_OPT_IN = 'opt_in';
    public const ACTION_OPT_OUT = 'opt_out';

    public const SOURCE_KEYWORD = 'keyword';
    public const SOURCE_OPERATOR = 'operator';

    protected $table = 'whatsapp_consent_logs';

    /**
     * @return BelongsTo<WhatsappContact, $this>
     */
    public function contact(): BelongsTo {
        return $this->belongsTo(WhatsappContact::class, 'whatsapp_contact_id');
    }
}
