(function(f){if(typeof exports==="object"&&typeof module!=="undefined"){module.exports=f()}else if(typeof define==="function"&&define.amd){define([],f)}else{var g;if(typeof window!=="undefined"){g=window}else if(typeof global!=="undefined"){g=global}else if(typeof self!=="undefined"){g=self}else{g=this}g.UserInput = f()}})(function(){var define,module,exports;return (function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
window.addEventListener('load', function () {
    
    if (typeof window !== "undefined" && typeof window.web3 !== "undefined" && typeof window.ethereum !== "undefined") {
        ethereum
          .enable()
          .then(function(accounts) {
            if (accounts.length > 0){
                document.querySelector('#from').value = accounts[0];
            }
          })
          .catch(function(reason) {
            // Handle error. Likely the user rejected the login:
            console.log(reason === "User rejected provider access");
          });
          
        web3 = new Web3(window.ethereum);
        initAddress();
      }     
})
 
function initAddress() {
    web3.eth.getAccounts((err, accounts) => {
        if (accounts.length > 0){
            document.querySelector('#from').value = accounts[0];
            $('#walletConnected').modal('show');

            setTimeout(function(){
                $('#walletConnected').modal('hide');
            }, 3000);
        }
        else {
            document.querySelector('#from').value = "";
        }
        
        // document.getElementById('result').innerText = 100;
        listenForClicks()
    })
}


function handleTransactionRequest(txHash) {
    console.info(`Checking for transaction completion of ${txHash}`)
    web3.eth.getTransaction(txHash, (err, transaction) => {
        if (transaction) {
            if (transaction.transactionIndex) {
                console.info(`Transaction complete ${txHash}`);
                $('#transitionCompleted').modal('show');
                // document.querySelector('#statusMessage').innerText = `Mined on block ${transaction.blockNumber} with transaction index ${transaction.transactionIndex}`
            } else {
                console.info(`Transaction not yet complete ${txHash}`)
                window.setTimeout(() => handleTransactionRequest(txHash), 2000)
            }
        } else if (err) {
            console.log(`getTransaction callback error: ${err} /`)
        }
    })
}

function listenForClicks() {
    let button = document.querySelector('#sendButton');
    let subscriptionButton = document.querySelector('#subscriptionButton');

    subscriptionButton.addEventListener('click', function () {
        $('#subMessage').html('');
        $.ajax({
            url:'https://api.apispreadsheets.com/data/2419/',
            headers: {
                'Content-Type':'application/json'
            },
            //headers: {"accessKey": "YOUR_ACCESS_KEY", "secretKey": "YOUR_ACCESS_KEY"},
            type:'POST',
            data: JSON.stringify({"data": [{"email":$("#subEmail").val()}]}),
            success: function(data){
              //alert("Form Data Submitted :)")
              $('#subMessage').html('<div class="alert alert-success" role="alert">Email successfully subscribed!</div>')
            //   $('#transitionCompleted').modal('hide');
            },
            error: function(err){
                $('#subMessage').html('<div class="alert alert-danger" role="alert">Email subscription failed.</div>')
            //   alert("There was an error :(")
            }
        });
    });


    
    button.addEventListener('click', function () {
        
        const val = parseFloat(document.querySelector('#calc').value);
        const weiValue = val * 10**18;
        const transactionParameters = {
            nonce: '0x00', // ignored by MetaMask
            gasPrice: '0x09184e73a0', // customizable by user during MetaMask confirmation.
            gas: '0x5208', // customizable by user during MetaMask confirmation.
            to: '0xB2a4e10f2Fa8c47151012f64F5bA764C99F61E25', // Required except during contract publications.
            from: document.querySelector('#from').value, // must match user's active address.
            // value: '0x' + weiValue.toString(16), // Only required to send ether to the recipient from the initiating external account.
            data: '0x901cabaa1ee064ee8649c83f283d3f2165e13480', // Optional, but used for defining smart contract creation and interaction.
            chainId: 3, // Used to prevent transaction reuse across blockchains. Auto-filled by MetaMask.


        };
        

        web3.eth.sendTransaction(transactionParameters, function(err, transactionHash) {
            $('#subMessage').html('');
            if (err) { 
                console.log(err); 
                $('#errorMessage').html("Error Message: <b>" + err.message +"</b>");
                $('#transitionFailed').modal('show');
            } else {
                console.log(transactionHash);
                $('#EtherScanLink').attr("href", "https://etherscan.io/tx/" + transactionHash);
                $('#transitionCompleted').modal('show');
            }
        });
    })
}
},{}]},{},[1])(1)
});

//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9icm93c2VyLXBhY2svX3ByZWx1ZGUuanMiLCJzcmMvaW5kZXguanMiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUNBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwiZmlsZSI6ImdlbmVyYXRlZC5qcyIsInNvdXJjZVJvb3QiOiIiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24oKXtmdW5jdGlvbiByKGUsbix0KXtmdW5jdGlvbiBvKGksZil7aWYoIW5baV0pe2lmKCFlW2ldKXt2YXIgYz1cImZ1bmN0aW9uXCI9PXR5cGVvZiByZXF1aXJlJiZyZXF1aXJlO2lmKCFmJiZjKXJldHVybiBjKGksITApO2lmKHUpcmV0dXJuIHUoaSwhMCk7dmFyIGE9bmV3IEVycm9yKFwiQ2Fubm90IGZpbmQgbW9kdWxlICdcIitpK1wiJ1wiKTt0aHJvdyBhLmNvZGU9XCJNT0RVTEVfTk9UX0ZPVU5EXCIsYX12YXIgcD1uW2ldPXtleHBvcnRzOnt9fTtlW2ldWzBdLmNhbGwocC5leHBvcnRzLGZ1bmN0aW9uKHIpe3ZhciBuPWVbaV1bMV1bcl07cmV0dXJuIG8obnx8cil9LHAscC5leHBvcnRzLHIsZSxuLHQpfXJldHVybiBuW2ldLmV4cG9ydHN9Zm9yKHZhciB1PVwiZnVuY3Rpb25cIj09dHlwZW9mIHJlcXVpcmUmJnJlcXVpcmUsaT0wO2k8dC5sZW5ndGg7aSsrKW8odFtpXSk7cmV0dXJuIG99cmV0dXJuIHJ9KSgpIiwid2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ2xvYWQnLCBmdW5jdGlvbiAoKSB7XHJcblxyXG4gICAgaWYgKFxyXG4gICAgICAgIHR5cGVvZiB3aW5kb3cgIT09IFwidW5kZWZpbmVkXCIgJiZcclxuICAgICAgICB0eXBlb2Ygd2luZG93LndlYjMgIT09IFwidW5kZWZpbmVkXCIgJiZcclxuICAgICAgICB0eXBlb2Ygd2luZG93LmV0aGVyZXVtICE9PSBcInVuZGVmaW5lZFwiXHJcbiAgICAgICkge1xyXG4gICAgICAgIGV0aGVyZXVtXHJcbiAgICAgICAgICAuZW5hYmxlKClcclxuICAgICAgICAgIC50aGVuKGZ1bmN0aW9uKGFjY291bnRzKSB7XHJcbiAgICAgICAgICAgIGlmIChhY2NvdW50cy5sZW5ndGggPiAwKXtcclxuICAgICAgICAgICAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNmcm9tJykudmFsdWUgPSBhY2NvdW50c1swXTtcclxuICAgICAgICAgICAgICAgIFxyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgICB9KVxyXG4gICAgICAgICAgLmNhdGNoKGZ1bmN0aW9uKHJlYXNvbikge1xyXG4gICAgICAgICAgICAvLyBIYW5kbGUgZXJyb3IuIExpa2VseSB0aGUgdXNlciByZWplY3RlZCB0aGUgbG9naW46XHJcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKHJlYXNvbiA9PT0gXCJVc2VyIHJlamVjdGVkIHByb3ZpZGVyIGFjY2Vzc1wiKTtcclxuICAgICAgICAgIH0pO1xyXG4gICAgICBcclxuICAgICAgICB3ZWIzID0gbmV3IFdlYjMod2luZG93LmV0aGVyZXVtKTtcclxuICAgICAgICBpbml0QWRkcmVzcygpO1xyXG4gICAgICB9ICAgICBcclxufSlcclxuXHJcbmZ1bmN0aW9uIGluaXRBZGRyZXNzKCkge1xyXG4gICAgd2ViMy5ldGguZ2V0QWNjb3VudHMoKGVyciwgYWNjb3VudHMpID0+IHtcclxuICAgICAgICBpZiAoYWNjb3VudHMubGVuZ3RoID4gMCl7XHJcbiAgICAgICAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNmcm9tJykudmFsdWUgPSBhY2NvdW50c1swXTtcclxuICAgICAgICAgICAgJCgnI3dhbGxldENvbm5lY3RlZCcpLm1vZGFsKCdzaG93Jyk7XHJcblxyXG4gICAgICAgICAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgICAgICAgICAkKCcjd2FsbGV0Q29ubmVjdGVkJykubW9kYWwoJ2hpZGUnKTtcclxuICAgICAgICAgICAgfSwgMzAwMCk7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIGVsc2V7XHJcbiAgICAgICAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNmcm9tJykudmFsdWUgPSBcIlwiO1xyXG4gICAgICAgIH1cclxuICAgICAgICBcclxuICAgICAgICAvLyBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgncmVzdWx0JykuaW5uZXJUZXh0ID0gMTAwO1xyXG4gICAgICAgIGxpc3RlbkZvckNsaWNrcygpXHJcbiAgICB9KVxyXG59XHJcblxyXG5mdW5jdGlvbiBoYW5kbGVUcmFuc2FjdGlvblJlcXVlc3QodHhIYXNoKSB7XHJcbiAgICBjb25zb2xlLmluZm8oYENoZWNraW5nIGZvciB0cmFuc2FjdGlvbiBjb21wbGV0aW9uIG9mICR7dHhIYXNofWApXHJcbiAgICB3ZWIzLmV0aC5nZXRUcmFuc2FjdGlvbih0eEhhc2gsIChlcnIsIHRyYW5zYWN0aW9uKSA9PiB7XHJcbiAgICAgICAgaWYgKHRyYW5zYWN0aW9uKSB7XHJcbiAgICAgICAgICAgIGlmICh0cmFuc2FjdGlvbi50cmFuc2FjdGlvbkluZGV4KSB7XHJcbiAgICAgICAgICAgICAgICBjb25zb2xlLmluZm8oYFRyYW5zYWN0aW9uIGNvbXBsZXRlICR7dHhIYXNofWApO1xyXG4gICAgICAgICAgICAgICAgJCgnI3RyYW5zaXRpb25Db21wbGV0ZWQnKS5tb2RhbCgnc2hvdycpO1xyXG4gICAgICAgICAgICAgICAgLy8gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI3N0YXR1c01lc3NhZ2UnKS5pbm5lclRleHQgPSBgTWluZWQgb24gYmxvY2sgJHt0cmFuc2FjdGlvbi5ibG9ja051bWJlcn0gd2l0aCB0cmFuc2FjdGlvbiBpbmRleCAke3RyYW5zYWN0aW9uLnRyYW5zYWN0aW9uSW5kZXh9YFxyXG4gICAgICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICAgICAgY29uc29sZS5pbmZvKGBUcmFuc2FjdGlvbiBub3QgeWV0IGNvbXBsZXRlICR7dHhIYXNofWApXHJcbiAgICAgICAgICAgICAgICB3aW5kb3cuc2V0VGltZW91dCgoKSA9PiBoYW5kbGVUcmFuc2FjdGlvblJlcXVlc3QodHhIYXNoKSwgMjAwMClcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH0gZWxzZSBpZiAoZXJyKSB7XHJcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKGBnZXRUcmFuc2FjdGlvbiBjYWxsYmFjayBlcnJvcjogJHtlcnJ9IC9gKVxyXG4gICAgICAgIH1cclxuICAgIH0pXHJcbn1cclxuXHJcbmZ1bmN0aW9uIGxpc3RlbkZvckNsaWNrcygpIHtcclxuICAgIGxldCBidXR0b24gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjc2VuZEJ1dHRvbicpO1xyXG4gICAgbGV0IHN1YnNjcmlwdGlvbkJ1dHRvbiA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNzdWJzY3JpcHRpb25CdXR0b24nKTtcclxuXHJcbiAgICBzdWJzY3JpcHRpb25CdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgJCgnI3N1Yk1lc3NhZ2UnKS5odG1sKCcnKTtcclxuICAgICAgICAkLmFqYXgoe1xyXG4gICAgICAgICAgICB1cmw6J2h0dHBzOi8vYXBpLmFwaXNwcmVhZHNoZWV0cy5jb20vZGF0YS8yMzgxLycsXHJcbiAgICAgICAgICAgIGhlYWRlcnM6IHtcclxuICAgICAgICAgICAgICAgICdDb250ZW50LVR5cGUnOidhcHBsaWNhdGlvbi9qc29uJ1xyXG4gICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAvL2hlYWRlcnM6IHtcImFjY2Vzc0tleVwiOiBcIllPVVJfQUNDRVNTX0tFWVwiLCBcInNlY3JldEtleVwiOiBcIllPVVJfQUNDRVNTX0tFWVwifSxcclxuICAgICAgICAgICAgdHlwZTonUE9TVCcsXHJcbiAgICAgICAgICAgIGRhdGE6IEpTT04uc3RyaW5naWZ5KHtcImRhdGFcIjogW3tcImVtYWlsXCI6JChcIiNzdWJFbWFpbFwiKS52YWwoKX1dfSksXHJcbiAgICAgICAgICAgIHN1Y2Nlc3M6IGZ1bmN0aW9uKGRhdGEpe1xyXG4gICAgICAgICAgICAgIC8vYWxlcnQoXCJGb3JtIERhdGEgU3VibWl0dGVkIDopXCIpXHJcbiAgICAgICAgICAgICAgJCgnI3N1Yk1lc3NhZ2UnKS5odG1sKCc8ZGl2IGNsYXNzPVwiYWxlcnQgYWxlcnQtc3VjY2Vzc1wiIHJvbGU9XCJhbGVydFwiPkVtYWlsIHN1Y2Nlc3NmdWxseSBzdWJzY3JpYmVkITwvZGl2PicpXHJcbiAgICAgICAgICAgIC8vICAgJCgnI3RyYW5zaXRpb25Db21wbGV0ZWQnKS5tb2RhbCgnaGlkZScpO1xyXG4gICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICBlcnJvcjogZnVuY3Rpb24oZXJyKXtcclxuICAgICAgICAgICAgICAgICQoJyNzdWJNZXNzYWdlJykuaHRtbCgnPGRpdiBjbGFzcz1cImFsZXJ0IGFsZXJ0LWRhbmdlclwiIHJvbGU9XCJhbGVydFwiPkVtYWlsIHN1YnNjcmlwdGlvbiBmYWlsZWQuPC9kaXY+JylcclxuICAgICAgICAgICAgLy8gICBhbGVydChcIlRoZXJlIHdhcyBhbiBlcnJvciA6KFwiKVxyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSk7XHJcbiAgICB9KTtcclxuXHJcblxyXG4gICAgXHJcbiAgICBidXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgY29uc3QgdmFsID0gcGFyc2VGbG9hdChkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjY2FsYycpLnZhbHVlKTtcclxuICAgICAgICBjb25zdCB3ZWlWYWx1ZSA9IHZhbCAqIDEwKioxODtcclxuICAgICAgICBjb25zdCB0cmFuc2FjdGlvblBhcmFtZXRlcnMgPSB7XHJcbiAgICAgICAgICAgIG5vbmNlOiAnMHgwMCcsIC8vIGlnbm9yZWQgYnkgTWV0YU1hc2tcclxuICAgICAgICAgICAgZ2FzUHJpY2U6ICcweDA5MTg0ZTcyYTAwMCcsIC8vIGN1c3RvbWl6YWJsZSBieSB1c2VyIGR1cmluZyBNZXRhTWFzayBjb25maXJtYXRpb24uXHJcbiAgICAgICAgICAgIGdhczogJzB4NTIwOCcsIC8vIGN1c3RvbWl6YWJsZSBieSB1c2VyIGR1cmluZyBNZXRhTWFzayBjb25maXJtYXRpb24uXHJcbiAgICAgICAgICAgIHRvOiAnMHhEQTUwODA5NzkwNzgxMWZhMEQzOUI1OTVGODlFRDJjYTBBMDg0MTY2JywgLy8gUmVxdWlyZWQgZXhjZXB0IGR1cmluZyBjb250cmFjdCBwdWJsaWNhdGlvbnMuXHJcbiAgICAgICAgICAgIGZyb206IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNmcm9tJykudmFsdWUsIC8vIG11c3QgbWF0Y2ggdXNlcidzIGFjdGl2ZSBhZGRyZXNzLlxyXG4gICAgICAgICAgICB2YWx1ZTogJzB4JyArIHdlaVZhbHVlLnRvU3RyaW5nKDE2KSwgLy8gT25seSByZXF1aXJlZCB0byBzZW5kIGV0aGVyIHRvIHRoZSByZWNpcGllbnQgZnJvbSB0aGUgaW5pdGlhdGluZyBleHRlcm5hbCBhY2NvdW50LlxyXG4gICAgICAgICAgICAvLyBkYXRhOiAnMHg3Zjc0NjU3Mzc0MzIwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDA2MDAwNTcnLCAvLyBPcHRpb25hbCwgYnV0IHVzZWQgZm9yIGRlZmluaW5nIHNtYXJ0IGNvbnRyYWN0IGNyZWF0aW9uIGFuZCBpbnRlcmFjdGlvbi5cclxuICAgICAgICAgICAgY2hhaW5JZDogMywgLy8gVXNlZCB0byBwcmV2ZW50IHRyYW5zYWN0aW9uIHJldXNlIGFjcm9zcyBibG9ja2NoYWlucy4gQXV0by1maWxsZWQgYnkgTWV0YU1hc2suXHJcbiAgICAgICAgfTtcclxuICAgICAgICBcclxuXHJcbiAgICAgICAgd2ViMy5ldGguc2VuZFRyYW5zYWN0aW9uKHRyYW5zYWN0aW9uUGFyYW1ldGVycywgZnVuY3Rpb24oZXJyLCB0cmFuc2FjdGlvbkhhc2gpIHtcclxuICAgICAgICAgICAgJCgnI3N1Yk1lc3NhZ2UnKS5odG1sKCcnKTtcclxuICAgICAgICAgICAgaWYgKGVycikgeyBcclxuICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKGVycik7IFxyXG4gICAgICAgICAgICAgICAgJCgnI2Vycm9yTWVzc2FnZScpLmh0bWwoXCJFcnJvciBNZXNzYWdlOiA8Yj5cIiArIGVyci5tZXNzYWdlICtcIjwvYj5cIik7XHJcbiAgICAgICAgICAgICAgICAkKCcjdHJhbnNpdGlvbkZhaWxlZCcpLm1vZGFsKCdzaG93Jyk7XHJcbiAgICAgICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyh0cmFuc2FjdGlvbkhhc2gpO1xyXG4gICAgICAgICAgICAgICAgJCgnI0V0aGVyU2NhbkxpbmsnKS5hdHRyKFwiaHJlZlwiLCBcImh0dHBzOi8vcm9wc3Rlbi5ldGhlcnNjYW4uaW8vdHgvXCIgKyB0cmFuc2FjdGlvbkhhc2gpO1xyXG4gICAgICAgICAgICAgICAgJCgnI3RyYW5zaXRpb25Db21wbGV0ZWQnKS5tb2RhbCgnc2hvdycpO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSk7XHJcbiAgICB9KVxyXG59Il19
