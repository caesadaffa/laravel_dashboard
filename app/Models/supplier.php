use App\Models\buah;
use Illuminate\Http\Request;

class buahController extends Controller
{
    // Index
    public function index()
    {
        $buahs = buah::all();
        return view('pages.buah.index', compact('buahs'));
    }

    // Show
    public function show(buah $buah)
    {
        return view('pages.buah.show', compact('buah'));
    }

    // Create
    public function create()
    {
        return view('pages.buah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namaBuah' => 'required',
            'jenisBuah' => 'required',
            'ukuran' => 'required',
            'Expired' => 'required',
        ]);

        buah::create($request->all());

        return redirect('/page/buah')->with('success', 'buah created successfully.');
    }

    // Edit
    public function edit(buah $buah)
    {
        return view('pages.buah.edit', compact('buah'));
    }

    public function update(Request $request, buah $buah)
    {
        $request->validate([
            'namaBuah' => 'required',
            'jenisBuah' => 'required',
            'ukuran' => 'required',
            'Expired' => 'required',
        ]);

        $buah->update($request->all());

        return redirect('/page/buah')->with('success', 'buah updated successfully.');
    }

    // Delete
    public function destroy(buah $buah)
    {
        $buah->delete();

        return redirect('/page/buah')->with('success', 'buah deleted successfully.');
    }
}
