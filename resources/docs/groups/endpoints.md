# Endpoints


## Return an empty response simply to trigger the storage of the CSRF cookie in the browser.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/sanctum/csrf-cookie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/sanctum/csrf-cookie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETsanctum-csrf-cookie" hidden>
    <blockquote>Received response<span id="execution-response-status-GETsanctum-csrf-cookie"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETsanctum-csrf-cookie"></code></pre>
</div>
<div id="execution-error-GETsanctum-csrf-cookie" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsanctum-csrf-cookie"></code></pre>
</div>
<form id="form-GETsanctum-csrf-cookie" data-method="GET" data-path="sanctum/csrf-cookie" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETsanctum-csrf-cookie', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETsanctum-csrf-cookie" onclick="tryItOut('GETsanctum-csrf-cookie');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETsanctum-csrf-cookie" onclick="cancelTryOut('GETsanctum-csrf-cookie');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETsanctum-csrf-cookie" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>sanctum/csrf-cookie</code></b>
</p>
</form>


## api/register




> Example request:

```bash
curl -X POST \
    "http://localhost/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"></code></pre>
</div>
<div id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register"></code></pre>
</div>
<form id="form-POSTapi-register" data-method="POST" data-path="api/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-register" onclick="tryItOut('POSTapi-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-register" onclick="cancelTryOut('POSTapi-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/register</code></b>
</p>
</form>


## api/login




> Example request:

```bash
curl -X POST \
    "http://localhost/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"></code></pre>
</div>
<div id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</div>
<form id="form-POSTapi-login" data-method="POST" data-path="api/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-login" onclick="tryItOut('POSTapi-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-login" onclick="cancelTryOut('POSTapi-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/login</code></b>
</p>
</form>


## api/me




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/me"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-me" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-me"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-me"></code></pre>
</div>
<div id="execution-error-GETapi-me" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-me"></code></pre>
</div>
<form id="form-GETapi-me" data-method="GET" data-path="api/me" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-me', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-me" onclick="tryItOut('GETapi-me');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-me" onclick="cancelTryOut('GETapi-me');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-me" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/me</code></b>
</p>
</form>


## api/auth/logout




> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-auth-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-logout"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-logout"></code></pre>
</div>
<form id="form-POSTapi-auth-logout" data-method="POST" data-path="api/auth/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-auth-logout" onclick="tryItOut('POSTapi-auth-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-auth-logout" onclick="cancelTryOut('POSTapi-auth-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-auth-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/logout</code></b>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/patiens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/patiens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Class 'App\\Http\\Controllers\\PatientResource' not found",
    "exception": "Error",
    "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\app\\Http\\Controllers\\PatientController.php",
    "line": 17,
    "trace": [
        {
            "function": "index",
            "class": "App\\Http\\Controllers\\PatientController",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php",
            "line": 54,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 255,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 691,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 668,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 634,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 623,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 95,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 39,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\symfony\\console\\Application.php",
            "line": 920,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\symfony\\console\\Application.php",
            "line": 266,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\symfony\\console\\Application.php",
            "line": 142,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-patiens" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-patiens"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-patiens"></code></pre>
</div>
<div id="execution-error-GETapi-patiens" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-patiens"></code></pre>
</div>
<form id="form-GETapi-patiens" data-method="GET" data-path="api/patiens" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-patiens', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-patiens" onclick="tryItOut('GETapi-patiens');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-patiens" onclick="cancelTryOut('GETapi-patiens');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-patiens" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/patiens</code></b>
</p>
</form>


## Show the form for creating a new resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/patiens/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/patiens/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-patiens-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-patiens-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-patiens-create"></code></pre>
</div>
<div id="execution-error-GETapi-patiens-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-patiens-create"></code></pre>
</div>
<form id="form-GETapi-patiens-create" data-method="GET" data-path="api/patiens/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-patiens-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-patiens-create" onclick="tryItOut('GETapi-patiens-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-patiens-create" onclick="cancelTryOut('GETapi-patiens-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-patiens-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/patiens/create</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/patiens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/patiens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-patiens" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-patiens"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-patiens"></code></pre>
</div>
<div id="execution-error-POSTapi-patiens" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-patiens"></code></pre>
</div>
<form id="form-POSTapi-patiens" data-method="POST" data-path="api/patiens" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-patiens', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-patiens" onclick="tryItOut('POSTapi-patiens');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-patiens" onclick="cancelTryOut('POSTapi-patiens');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-patiens" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/patiens</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/patiens/minus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/patiens/minus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Class 'App\\Http\\Controllers\\PatientResource' not found",
    "exception": "Error",
    "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\app\\Http\\Controllers\\PatientController.php",
    "line": 83,
    "trace": [
        {
            "function": "show",
            "class": "App\\Http\\Controllers\\PatientController",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php",
            "line": 54,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 255,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 691,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 668,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 634,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 623,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 95,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 39,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\symfony\\console\\Application.php",
            "line": 920,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\symfony\\console\\Application.php",
            "line": 266,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\symfony\\console\\Application.php",
            "line": 142,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-patiens--patien-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-patiens--patien-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-patiens--patien-"></code></pre>
</div>
<div id="execution-error-GETapi-patiens--patien-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-patiens--patien-"></code></pre>
</div>
<form id="form-GETapi-patiens--patien-" data-method="GET" data-path="api/patiens/{patien}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-patiens--patien-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-patiens--patien-" onclick="tryItOut('GETapi-patiens--patien-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-patiens--patien-" onclick="cancelTryOut('GETapi-patiens--patien-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-patiens--patien-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/patiens/{patien}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>patien</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="patien" data-endpoint="GETapi-patiens--patien-" data-component="url" required  hidden>
<br>

</p>
</form>


## Show the form for editing the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/patiens/ut/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/patiens/ut/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-patiens--patien--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-patiens--patien--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-patiens--patien--edit"></code></pre>
</div>
<div id="execution-error-GETapi-patiens--patien--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-patiens--patien--edit"></code></pre>
</div>
<form id="form-GETapi-patiens--patien--edit" data-method="GET" data-path="api/patiens/{patien}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-patiens--patien--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-patiens--patien--edit" onclick="tryItOut('GETapi-patiens--patien--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-patiens--patien--edit" onclick="cancelTryOut('GETapi-patiens--patien--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-patiens--patien--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/patiens/{patien}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>patien</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="patien" data-endpoint="GETapi-patiens--patien--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/patiens/quae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/patiens/quae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-patiens--patien-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-patiens--patien-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-patiens--patien-"></code></pre>
</div>
<div id="execution-error-PUTapi-patiens--patien-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-patiens--patien-"></code></pre>
</div>
<form id="form-PUTapi-patiens--patien-" data-method="PUT" data-path="api/patiens/{patien}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-patiens--patien-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-patiens--patien-" onclick="tryItOut('PUTapi-patiens--patien-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-patiens--patien-" onclick="cancelTryOut('PUTapi-patiens--patien-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-patiens--patien-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/patiens/{patien}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/patiens/{patien}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>patien</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="patien" data-endpoint="PUTapi-patiens--patien-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/patiens/inventore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/patiens/inventore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-patiens--patien-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-patiens--patien-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-patiens--patien-"></code></pre>
</div>
<div id="execution-error-DELETEapi-patiens--patien-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-patiens--patien-"></code></pre>
</div>
<form id="form-DELETEapi-patiens--patien-" data-method="DELETE" data-path="api/patiens/{patien}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-patiens--patien-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-patiens--patien-" onclick="tryItOut('DELETEapi-patiens--patien-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-patiens--patien-" onclick="cancelTryOut('DELETEapi-patiens--patien-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-patiens--patien-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/patiens/{patien}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>patien</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="patien" data-endpoint="DELETEapi-patiens--patien-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/givaways" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/givaways"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-givaways" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-givaways"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-givaways"></code></pre>
</div>
<div id="execution-error-GETapi-givaways" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-givaways"></code></pre>
</div>
<form id="form-GETapi-givaways" data-method="GET" data-path="api/givaways" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-givaways', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-givaways" onclick="tryItOut('GETapi-givaways');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-givaways" onclick="cancelTryOut('GETapi-givaways');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-givaways" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/givaways</code></b>
</p>
</form>


## Show the form for creating a new resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/givaways/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/givaways/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-givaways-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-givaways-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-givaways-create"></code></pre>
</div>
<div id="execution-error-GETapi-givaways-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-givaways-create"></code></pre>
</div>
<form id="form-GETapi-givaways-create" data-method="GET" data-path="api/givaways/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-givaways-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-givaways-create" onclick="tryItOut('GETapi-givaways-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-givaways-create" onclick="cancelTryOut('GETapi-givaways-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-givaways-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/givaways/create</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/givaways" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/givaways"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-givaways" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-givaways"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-givaways"></code></pre>
</div>
<div id="execution-error-POSTapi-givaways" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-givaways"></code></pre>
</div>
<form id="form-POSTapi-givaways" data-method="POST" data-path="api/givaways" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-givaways', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-givaways" onclick="tryItOut('POSTapi-givaways');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-givaways" onclick="cancelTryOut('POSTapi-givaways');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-givaways" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/givaways</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/givaways/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/givaways/ut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-givaways--givaway-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-givaways--givaway-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-givaways--givaway-"></code></pre>
</div>
<div id="execution-error-GETapi-givaways--givaway-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-givaways--givaway-"></code></pre>
</div>
<form id="form-GETapi-givaways--givaway-" data-method="GET" data-path="api/givaways/{givaway}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-givaways--givaway-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-givaways--givaway-" onclick="tryItOut('GETapi-givaways--givaway-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-givaways--givaway-" onclick="cancelTryOut('GETapi-givaways--givaway-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-givaways--givaway-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/givaways/{givaway}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>givaway</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="givaway" data-endpoint="GETapi-givaways--givaway-" data-component="url" required  hidden>
<br>

</p>
</form>


## Show the form for editing the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/givaways/nihil/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/givaways/nihil/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-givaways--givaway--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-givaways--givaway--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-givaways--givaway--edit"></code></pre>
</div>
<div id="execution-error-GETapi-givaways--givaway--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-givaways--givaway--edit"></code></pre>
</div>
<form id="form-GETapi-givaways--givaway--edit" data-method="GET" data-path="api/givaways/{givaway}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-givaways--givaway--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-givaways--givaway--edit" onclick="tryItOut('GETapi-givaways--givaway--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-givaways--givaway--edit" onclick="cancelTryOut('GETapi-givaways--givaway--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-givaways--givaway--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/givaways/{givaway}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>givaway</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="givaway" data-endpoint="GETapi-givaways--givaway--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/givaways/voluptatibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/givaways/voluptatibus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-givaways--givaway-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-givaways--givaway-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-givaways--givaway-"></code></pre>
</div>
<div id="execution-error-PUTapi-givaways--givaway-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-givaways--givaway-"></code></pre>
</div>
<form id="form-PUTapi-givaways--givaway-" data-method="PUT" data-path="api/givaways/{givaway}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-givaways--givaway-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-givaways--givaway-" onclick="tryItOut('PUTapi-givaways--givaway-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-givaways--givaway-" onclick="cancelTryOut('PUTapi-givaways--givaway-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-givaways--givaway-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/givaways/{givaway}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/givaways/{givaway}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>givaway</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="givaway" data-endpoint="PUTapi-givaways--givaway-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/givaways/quod" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/givaways/quod"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-givaways--givaway-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-givaways--givaway-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-givaways--givaway-"></code></pre>
</div>
<div id="execution-error-DELETEapi-givaways--givaway-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-givaways--givaway-"></code></pre>
</div>
<form id="form-DELETEapi-givaways--givaway-" data-method="DELETE" data-path="api/givaways/{givaway}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-givaways--givaway-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-givaways--givaway-" onclick="tryItOut('DELETEapi-givaways--givaway-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-givaways--givaway-" onclick="cancelTryOut('DELETEapi-givaways--givaway-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-givaways--givaway-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/givaways/{givaway}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>givaway</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="givaway" data-endpoint="DELETEapi-givaways--givaway-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/periodicals" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/periodicals"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-periodicals" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-periodicals"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-periodicals"></code></pre>
</div>
<div id="execution-error-GETapi-periodicals" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-periodicals"></code></pre>
</div>
<form id="form-GETapi-periodicals" data-method="GET" data-path="api/periodicals" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-periodicals', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-periodicals" onclick="tryItOut('GETapi-periodicals');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-periodicals" onclick="cancelTryOut('GETapi-periodicals');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-periodicals" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/periodicals</code></b>
</p>
</form>


## api/periodicals




> Example request:

```bash
curl -X POST \
    "http://localhost/api/periodicals" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/periodicals"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-periodicals" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-periodicals"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-periodicals"></code></pre>
</div>
<div id="execution-error-POSTapi-periodicals" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-periodicals"></code></pre>
</div>
<form id="form-POSTapi-periodicals" data-method="POST" data-path="api/periodicals" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-periodicals', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-periodicals" onclick="tryItOut('POSTapi-periodicals');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-periodicals" onclick="cancelTryOut('POSTapi-periodicals');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-periodicals" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/periodicals</code></b>
</p>
</form>


## api/periodicals/{periodical}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/periodicals/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/periodicals/voluptatem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Class 'App\\Http\\Controllers\\PeriodicalMedicineResource' not found",
    "exception": "Error",
    "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\app\\Http\\Controllers\\PeriodicalMedicineController.php",
    "line": 63,
    "trace": [
        {
            "function": "show",
            "class": "App\\Http\\Controllers\\PeriodicalMedicineController",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php",
            "line": 54,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 255,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 691,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 668,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 634,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 623,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 95,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 39,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\symfony\\console\\Application.php",
            "line": 920,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\symfony\\console\\Application.php",
            "line": 266,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\symfony\\console\\Application.php",
            "line": 142,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-periodicals--periodical-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-periodicals--periodical-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-periodicals--periodical-"></code></pre>
</div>
<div id="execution-error-GETapi-periodicals--periodical-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-periodicals--periodical-"></code></pre>
</div>
<form id="form-GETapi-periodicals--periodical-" data-method="GET" data-path="api/periodicals/{periodical}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-periodicals--periodical-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-periodicals--periodical-" onclick="tryItOut('GETapi-periodicals--periodical-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-periodicals--periodical-" onclick="cancelTryOut('GETapi-periodicals--periodical-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-periodicals--periodical-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/periodicals/{periodical}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>periodical</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="periodical" data-endpoint="GETapi-periodicals--periodical-" data-component="url" required  hidden>
<br>

</p>
</form>


## Show the form for editing the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/periodicals/repellat/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/periodicals/repellat/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-periodicals--periodical--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-periodicals--periodical--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-periodicals--periodical--edit"></code></pre>
</div>
<div id="execution-error-GETapi-periodicals--periodical--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-periodicals--periodical--edit"></code></pre>
</div>
<form id="form-GETapi-periodicals--periodical--edit" data-method="GET" data-path="api/periodicals/{periodical}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-periodicals--periodical--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-periodicals--periodical--edit" onclick="tryItOut('GETapi-periodicals--periodical--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-periodicals--periodical--edit" onclick="cancelTryOut('GETapi-periodicals--periodical--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-periodicals--periodical--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/periodicals/{periodical}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>periodical</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="periodical" data-endpoint="GETapi-periodicals--periodical--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/periodicals/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/periodicals/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-periodicals--periodical-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-periodicals--periodical-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-periodicals--periodical-"></code></pre>
</div>
<div id="execution-error-PUTapi-periodicals--periodical-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-periodicals--periodical-"></code></pre>
</div>
<form id="form-PUTapi-periodicals--periodical-" data-method="PUT" data-path="api/periodicals/{periodical}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-periodicals--periodical-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-periodicals--periodical-" onclick="tryItOut('PUTapi-periodicals--periodical-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-periodicals--periodical-" onclick="cancelTryOut('PUTapi-periodicals--periodical-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-periodicals--periodical-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/periodicals/{periodical}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/periodicals/{periodical}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>periodical</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="periodical" data-endpoint="PUTapi-periodicals--periodical-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/periodicals/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/periodicals/ut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-periodicals--periodical-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-periodicals--periodical-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-periodicals--periodical-"></code></pre>
</div>
<div id="execution-error-DELETEapi-periodicals--periodical-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-periodicals--periodical-"></code></pre>
</div>
<form id="form-DELETEapi-periodicals--periodical-" data-method="DELETE" data-path="api/periodicals/{periodical}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-periodicals--periodical-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-periodicals--periodical-" onclick="tryItOut('DELETEapi-periodicals--periodical-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-periodicals--periodical-" onclick="cancelTryOut('DELETEapi-periodicals--periodical-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-periodicals--periodical-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/periodicals/{periodical}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>periodical</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="periodical" data-endpoint="DELETEapi-periodicals--periodical-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-orders" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-orders"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders"></code></pre>
</div>
<div id="execution-error-GETapi-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders"></code></pre>
</div>
<form id="form-GETapi-orders" data-method="GET" data-path="api/orders" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-orders', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-orders" onclick="tryItOut('GETapi-orders');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-orders" onclick="cancelTryOut('GETapi-orders');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-orders" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/orders</code></b>
</p>
</form>


## Show the form for creating a new resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/orders/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-orders-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-orders-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders-create"></code></pre>
</div>
<div id="execution-error-GETapi-orders-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders-create"></code></pre>
</div>
<form id="form-GETapi-orders-create" data-method="GET" data-path="api/orders/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-orders-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-orders-create" onclick="tryItOut('GETapi-orders-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-orders-create" onclick="cancelTryOut('GETapi-orders-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-orders-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/orders/create</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-orders" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-orders"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-orders"></code></pre>
</div>
<div id="execution-error-POSTapi-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-orders"></code></pre>
</div>
<form id="form-POSTapi-orders" data-method="POST" data-path="api/orders" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-orders', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-orders" onclick="tryItOut('POSTapi-orders');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-orders" onclick="cancelTryOut('POSTapi-orders');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-orders" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/orders</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/orders/sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders/sit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Order] sit",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
    "line": 364,
    "trace": [
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
            "line": 313,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\nunomaduro\\collision\\src\\Adapters\\Laravel\\ExceptionHandler.php",
            "line": 54,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 51,
            "function": "render",
            "class": "NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 172,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 668,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 634,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 623,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 95,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 39,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\symfony\\console\\Application.php",
            "line": 920,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\symfony\\console\\Application.php",
            "line": 266,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\symfony\\console\\Application.php",
            "line": 142,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-orders--order-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-orders--order-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders--order-"></code></pre>
</div>
<div id="execution-error-GETapi-orders--order-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders--order-"></code></pre>
</div>
<form id="form-GETapi-orders--order-" data-method="GET" data-path="api/orders/{order}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-orders--order-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-orders--order-" onclick="tryItOut('GETapi-orders--order-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-orders--order-" onclick="cancelTryOut('GETapi-orders--order-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-orders--order-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/orders/{order}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order" data-endpoint="GETapi-orders--order-" data-component="url" required  hidden>
<br>

</p>
</form>


## Show the form for editing the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/orders/pariatur/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders/pariatur/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Order] pariatur",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
    "line": 364,
    "trace": [
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
            "line": 313,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\nunomaduro\\collision\\src\\Adapters\\Laravel\\ExceptionHandler.php",
            "line": 54,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 51,
            "function": "render",
            "class": "NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 172,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 668,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 634,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 623,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 95,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 39,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\symfony\\console\\Application.php",
            "line": 920,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\symfony\\console\\Application.php",
            "line": 266,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\symfony\\console\\Application.php",
            "line": 142,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\DevApp\\Core\\Flix\\New\\phar0maD-resource\\pharamaD-api-dashboard\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-orders--order--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-orders--order--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders--order--edit"></code></pre>
</div>
<div id="execution-error-GETapi-orders--order--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders--order--edit"></code></pre>
</div>
<form id="form-GETapi-orders--order--edit" data-method="GET" data-path="api/orders/{order}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-orders--order--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-orders--order--edit" onclick="tryItOut('GETapi-orders--order--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-orders--order--edit" onclick="cancelTryOut('GETapi-orders--order--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-orders--order--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/orders/{order}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order" data-endpoint="GETapi-orders--order--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/orders/in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders/in"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-orders--order-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-orders--order-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-orders--order-"></code></pre>
</div>
<div id="execution-error-PUTapi-orders--order-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-orders--order-"></code></pre>
</div>
<form id="form-PUTapi-orders--order-" data-method="PUT" data-path="api/orders/{order}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-orders--order-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-orders--order-" onclick="tryItOut('PUTapi-orders--order-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-orders--order-" onclick="cancelTryOut('PUTapi-orders--order-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-orders--order-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/orders/{order}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/orders/{order}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order" data-endpoint="PUTapi-orders--order-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/orders/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-orders--order-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-orders--order-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-orders--order-"></code></pre>
</div>
<div id="execution-error-DELETEapi-orders--order-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-orders--order-"></code></pre>
</div>
<form id="form-DELETEapi-orders--order-" data-method="DELETE" data-path="api/orders/{order}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-orders--order-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-orders--order-" onclick="tryItOut('DELETEapi-orders--order-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-orders--order-" onclick="cancelTryOut('DELETEapi-orders--order-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-orders--order-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/orders/{order}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order" data-endpoint="DELETEapi-orders--order-" data-component="url" required  hidden>
<br>

</p>
</form>


## /




> Example request:

```bash
curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Build v8.8.0
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

```
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
</form>



