<!DOCTYPE html><html lang=""><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1"><link rel="icon" href="/favicon.ico"><title>@zuri/zuri-plugin-todo</title><link href="/js/app.66142244.js" rel="preload" as="script"></head><body><noscript><strong>We're sorry but @zuri/zuri-plugin-todo doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript><div id="app"></div><main><h1>Your Microfrontend is not here</h1><p>The @zuri/zuri-plugin-todo microfrontend is running in "integrated" mode, since standalone-single-spa-webpack-plugin is disabled. This means that it does not work as a standalone application without changing configuration.</p><h2>How do I develop this microfrontend?</h2><p>To develop this microfrontend, try the following steps:</p><ol><li>Copy the following URL to your clipboard: <a target="_blank" rel="noopener" id="mf-url"></a></li><li>In a new browser tab, go to the your single-spa web app. This is where your "root config" is running. You do not have to run the root config locally if it is already running on a deployed environment - go to the deployed environment directly.</li><li>In the browser console, run <code>localStorage.setItem('devtools', true);</code> Refresh the page.</li><li>A yellowish rectangle should appear at the bottom right of your screen. Click on it. Find the name @zuri/zuri-plugin-todo and click on it. If it is not present, click on Add New Module.</li><li>Paste the URL above into the input that appears. Refresh the page.</li><li>Congrats, your local code is now being used!</li></ol><p></p><p>For further information about "integrated" mode, see the following links:</p><ul><li><a target="_blank" rel="noopener" href="https://single-spa.js.org/docs/recommended-setup#local-development">Local Development Overview</a></li><li><a target="_blank" rel="noopener" href="https://github.com/joeldenning/import-map-overrides">Import Map Overrides Documentation</a></li></ul><p></p><h2>If you prefer Standalone mode</h2><p>To run this microfrontend in "standalone" mode, the standalone-single-spa-webpack-plugin must not be disabled. In some cases, this is done by running <code>npm run start:standalone</code>. Alternatively, you can add <code>--env.standalone</code> to your package.json start script if you are using webpack-config-single-spa.</p>If neither of those work for you, see more details about enabling standalone mode at <a target="_blank" rel="noopener" href="https://github.com/single-spa/standalone-single-spa-webpack-plugin">Standalone Plugin Documentation</a>.<p></p><script>const mfLink = document.getElementById('mf-url');
        const fullSrc = new URL('/js/app.66142244.js', window.location.href);
        mfLink.href = fullSrc;
        mfLink.textContent = fullSrc;</script></main></body></html>