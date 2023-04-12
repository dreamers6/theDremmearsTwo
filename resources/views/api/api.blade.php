@extends('layout')
@section('anass')
    {{-- Header nav --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary mt-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <!-- <i class="fa-sharp fa-light fa-bars"></i> -->
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('services') }}">Services</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/login">Sign in</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/api">Api</a>
            </li>
            <li class="nav-item">
            <a href="/register" class="nav-link sign">Sign Up</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
    {{-- end nav --}}

    {{-- main section --}}
    <main class="main-api-section">
        <div class="container">
            <div class="first-api-box mt-5 mb-5">
                <div class="row first-api-row">
                    <div class="col-lg-6 first-api-col">
                        <div class="first-api-body">
                        <h2  class="first-api-title text-white">API</h2>
                        <p class="first-api-text">You can benefit from our services at the most affordable prices.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-api-box">
                <table class="table custom-table">
                    <tbody>
                    <tr>
                        <td class="text-white fs-6">HTTP Method</td>
                        <td class="text-white fs-6 border-left">POST</td>
                    </tr>
                    <tr>
                        <td class="text-white fs-6">API URL</td>
                        <td class="text-white fs-6 border-left">https://smmpanel.ma/api/v2
                        </td>
                    </tr>
                    <tr>
                        <td class="text-white fs-6">Response format</td>
                        <td class="text-white fs-6 border-left">JSON</td>
                    </tr>
                    </tbody>
                </table>
                <h4 class="m-t-md">
                    <strong class="text-white">Service List</strong>
                </h4>
                <table class="table custom-table">
                    <tbody>
                    <tr>
                        <th class="text-white fs-6">Parameters</th>
                        <th class="text-white fs-6 border-left">Description</th>
                    </tr>
                    <tr>
                        <td class="text-white fs-6">key</td>
                        <td class="text-white fs-6 border-left">Your API key
                        </td>
                    </tr>
                    <tr>
                        <td class="text-white fs-6">action</td>
                        <td class="text-white fs-6 border-left">services</td>
                    </tr>
                    </tbody>
                </table>
                <p class="text-white fw-bold">Example response</p>
                <pre class="response">[
  {
     "service": 1,
     "name": "Followers",
     "type": "Default",
     "category": "First Category",
     "rate": "0.90",
     "min": "50",
     "max": "10000",
     "refill": true
  },
  {
     "service": 2,
     "name": "Comments",
     "type": "Custom Comments",
     "category": "Second Category",
     "rate": "8",
     "min": "10",
     "max": "1500",
     "refill": false
 }
]</pre>
                <h4 class="m-t-md">
                    <strong class="text-white">Add order</strong>
                </h4>
                <select class="form-select form-select-lg mb-3 api-select" aria-label=".form-select-lg example">
                    <option selected class="text-white">Default</option>
                    <option value="1" class="text-white">Package</option>
                    <option value="2" class="text-white">Custom Comments</option>
                    <option value="3" class="text-white">Poll</option>
                    <option value="4" class="text-white">Subscription</option>
                </select>
                <table class="table custom-table">
                    <tbody>
                    <tr>
                        <th class="text-white fs-6">Parameters</th>
                        <th class="text-white fs-6 border-left">Description</th>
                    </tr>
                    <tr>
                        <td class="text-white fs-6">key</td>
                        <td class="text-white fs-6 border-left">Your API key
                        </td>
                    </tr>
                    <tr>
                        <td class="text-white fs-6">action</td>
                        <td class="text-white fs-6 border-left">add</td>
                    </tr>
                    <tr>
                        <td class="text-white fs-6">service</td>
                        <td class="text-white fs-6 border-left">Service ID
                        </td>
                    </tr>
                    <tr>
                        <td class="text-white fs-6">link</td>
                        <td class="text-white fs-6 border-left">link to page</td>
                    </tr>
                    <tr>
                        <td class="text-white fs-6">quantity</td>
                        <td class="text-white fs-6 border-left">Needed quantity                        </td>
                    </tr>
                    <tr>
                        <td class="text-white fs-6">runs (optional)</td>
                        <td class="text-white fs-6 border-left">runs (optional)	</td>
                    </tr>
                    <tr>
                        <td class="text-white fs-6">interval (optional)	</td>
                        <td class="text-white fs-6 border-left">Interval in minutes
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p class="text-white fw-bold">Example response</p>
                <pre class="response">
{
    "order": 23501
}
                </pre>
                <h4 class="m-t-md">
                    <strong class="text-white">Order status</strong>
                </h4>
                <table class="table custom-table">
                    <tbody>
                    <tr>
                        <th class="text-white fs-6">Parameters</th>
                        <th class="text-white fs-6 border-left">Description</th>
                    </tr>
                    <tr>
                        <td class="text-white fs-6">key</td>
                        <td class="text-white fs-6 border-left">Your API key
                        </td>
                    </tr>
                    <tr>
                        <td class="text-white fs-6">action</td>
                        <td class="text-white fs-6 border-left">status</td>
                    </tr>
                    <tr>
                        <td class="text-white fs-6">order</td>
                        <td class="text-white fs-6 border-left">order ID
                        </td>
                    </tr>

                    </tbody>
                </table>
                <p class="text-white fw-bold">Example response</p>
                <pre class="response">
{

 "charge": "0.27819",
 "start_count": "3572",
 "status": "Partial",
 "remains": "157",
 "currency": "USD"

}
               </pre>
               <h4 class="m-t-md">
                <strong class="text-white">Multiple order status</strong>
            </h4>
            <table class="table custom-table">
                <tbody>
                <tr>
                    <th class="text-white fs-6">Parameters</th>
                    <th class="text-white fs-6 border-left">Description</th>
                </tr>
                <tr>
                    <td class="text-white fs-6">key</td>
                    <td class="text-white fs-6 border-left">Your API key
                    </td>
                </tr>
                <tr>
                    <td class="text-white fs-6">action</td>
                    <td class="text-white fs-6 border-left">status</td>
                </tr>
                <tr>
                    <td class="text-white fs-6">order</td>
                    <td class="text-white fs-6 border-left">Order IDs separated by comma
                    </td>
                </tr>
                </tbody>
            </table>
            <p class="text-white fw-bold">Example response</p>
                <pre class="response">
{

   "1": {
      "charge": "0.27819",
      "start_count": "3572",
      "status": "Partial",
      "remains": "157",
      "currency": "USD"
   },
   "10": {
      "error": "Incorrect order ID"
   },
   "100": {
      "charge": "1.44219",
      "start_count": "234",
      "status": "In progress",
      "remains": "10",
      "currency": "USD"
   }

}
               </pre>
               <h4 class="m-t-md">
                <strong class="text-white">Create refill
                </strong>
            </h4>
            <table class="table custom-table">
                <tbody>
                <tr>
                    <th class="text-white fs-6">Parameters</th>
                    <th class="text-white fs-6 border-left">Description</th>
                </tr>
                <tr>
                    <td class="text-white fs-6">key</td>
                    <td class="text-white fs-6 border-left">Your API key
                    </td>
                </tr>
                <tr>
                    <td class="text-white fs-6">action</td>
                    <td class="text-white fs-6 border-left">Refill</td>
                </tr>
                <tr>
                    <td class="text-white fs-6">order</td>
                    <td class="text-white fs-6 border-left">order ID
                    </td>
                </tr>

                </tbody>
            </table>
            <p class="text-white fw-bold">Example response</p>
            <pre class="response">
{
    "refill": "1"

}
           </pre>
           <h4 class="m-t-md">
            <strong class="text-white">Get refill status            </strong>
        </h4>
        <table class="table custom-table">
            <tbody>
            <tr>
                <th class="text-white fs-6">Parameters</th>
                <th class="text-white fs-6 border-left">Description</th>
            </tr>
            <tr>
                <td class="text-white fs-6">key</td>
                <td class="text-white fs-6 border-left">Your API key
                </td>
            </tr>
            <tr>
                <td class="text-white fs-6">action</td>
                <td class="text-white fs-6 border-left">refill_status</td>
            </tr>
            <tr>
                <td class="text-white fs-6">refill</td>
                <td class="text-white fs-6 border-left">refill ID
                </td>
            </tr>

            </tbody>
        </table>
        <p class="text-white fw-bold">Example response</p>
        <pre class="response">
{
    "status": "Completed"
}
       </pre>
           <h4 class="m-t-md">
            <strong class="text-white">Get           </strong>
        </h4>
        <table class="table custom-table">
            <tbody>
            <tr>
                <th class="text-white fs-6">Parameters</th>
                <th class="text-white fs-6 border-left">Description</th>
            </tr>
            <tr>
                <td class="text-white fs-6">key</td>
                <td class="text-white fs-6 border-left">Your API key
                </td>
            </tr>
            <tr>
                <td class="text-white fs-6">action</td>
                <td class="text-white fs-6 border-left">balance</td>
            </tr>
            </tbody>
        </table>
        <p class="text-white fw-bold">Example response</p>
        <pre class="response">
{
    "balance": "100.84292",
    "currency": "USD"
}
       </pre>
            <div class="btn btn-danger my-btn">Example of PHP code</div>
            </div>
        </div>
    </main>
    {{-- end main section --}}
@endsection
