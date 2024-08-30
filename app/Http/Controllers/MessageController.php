<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        // تحقق من صحة البيانات
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // حفظ الرسالة في قاعدة البيانات
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // إعادة توجيه المستخدم مع رسالة نجاح
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
