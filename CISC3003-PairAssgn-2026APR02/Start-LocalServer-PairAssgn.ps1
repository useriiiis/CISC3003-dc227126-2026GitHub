# Run in PowerShell or double-click START-LOCAL-SERVER-PairAssgn.bat
Set-Location $PSScriptRoot

$port = 8765
try {
  $existing = Get-NetTCPConnection -LocalPort $port -State Listen -ErrorAction SilentlyContinue | Select-Object -First 1
} catch {
  $existing = $null
}

if ($existing -and $existing.OwningProcess) {
  $pid = $existing.OwningProcess
  Write-Host ""
  Write-Host "Port $port is already in use (PID $pid)."
  Write-Host "Stopping the old server so we can start the latest one..."
  try {
    Stop-Process -Id $pid -Force -ErrorAction Stop
    Start-Sleep -Milliseconds 500
    Write-Host "Old server stopped."
  } catch {
    Write-Host "Failed to stop PID $pid. Close the old server window and try again."
    Read-Host "Press Enter to exit"
    exit 1
  }
}

Write-Host ""
Write-Host "Keep this window OPEN. Browser:"
Write-Host "  http://127.0.0.1:8765/cisc3003-PairAssgn.html"
Write-Host "  http://127.0.0.1:8765/pairProfile.html"
Write-Host "  http://127.0.0.1:8765/pairSummary.html"
Write-Host "  http://127.0.0.1:8765/pairShowcase.html"
Write-Host "  http://127.0.0.1:8765/pairQualification.html"
Write-Host ""
Write-Host "Demo pages:"
Write-Host "  http://127.0.0.1:8765/demos/pair-project-demo01.html"
Write-Host "  http://127.0.0.1:8765/demos/pair-project-demo02.html"
Write-Host "  http://127.0.0.1:8765/demos/pair-project-demo03.html"
Write-Host ""
Write-Host "Portfolio pages:"
Write-Host "  http://127.0.0.1:8765/portfolio-iek/index.html"
Write-Host "  http://127.0.0.1:8765/portfolio-tim/index.html"
Write-Host ""
Write-Host "Stop: Ctrl+C"
Write-Host "----------------------------------------"

python -m http.server $port
Read-Host "Press Enter to close"

