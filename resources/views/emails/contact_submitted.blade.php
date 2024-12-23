<!-- Simplicity is an acquired taste. - Katharine Gerould -->
<h1>New Contact Submission</h1>
<p><strong>Name:</strong> {{ $formData['name'] }}</p>
<p><strong>Email:</strong> {{ $formData['email'] }}</p>
@if (!empty($formData['mobile']))
<p><strong>Mobile:</strong> {{ $formData['mobile'] }}</p>
@endif
@if (!empty($formData['service']))
<p><strong>Service:</strong> {{ $formData['service'] }}</p>
@endif
<p><strong>Message:</strong> {{ $formData['message'] }}</p>
